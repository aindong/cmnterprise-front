<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\UserEvent;
use App\Models\UserTransaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    protected $transactURL    = 'https://pay.7-eleven.com.ph/transact';
    protected $inquireURL     = 'https://pay.7-eleven.com.ph/inquire';
    protected $transactionKey = '46b67a162275d93b09d3320a1a9ba7a8125cfb804b2f50052ea8f61ccff642d3';
    protected $merchantID     = 'shimano';
    protected $amount         = 500;

    public function index()
    {
        return view('events.index');
    }

    public function eventPage($slug)
    {
        $event = Event::where('slug', $slug)->first();

        if (! $event) {
            //TODO: Make a 404 page
            return 'event not found';
        }

        return view('events.event')->with('event', $event);
    }

    public function eventRegistration(Request $request, $slug)
    {
        $input = $request->all();

        $refNo = uniqid();

        $event = Event::where('slug', $slug)->first();

        // REGISTER A USER
        $user = $this->registerUser($input);

        if (! $user) {
            return redirect()
                ->back()
                ->withInput();
        }

        // REGISTER A USER TO EVENT
        $this->registerUserToEvent($input, $user, $event);

        // RECORD TRANSACTION
        $this->recordTransaction($refNo, '7-Connect', $user, $event);

        // Get payment uri
        $paymentUrl = $this->processPayment($refNo, $slug);

        return redirect()->to($paymentUrl);
    }

    public function paymentSuccess($slug)
    {
        echo 'Success payment';
    }

    public function paymentFailed($slug)
    {
        echo 'Failed payment';
    }

    private function registerUser($input)
    {
        $user = null;

        $user = new User;
        $user->firstname    = $input['firstname'];
        $user->lastname     = $input['lastname'];
        $user->middlename   = $input['middlename'];
        $user->birthdate    = Carbon::createFromTimestamp(strtotime($input['birthdate']))->toDateString();
        $user->gender       = $input['gender'];
        $user->mobilenumber = $input['mobilenumber'];
        $user->nationality  = $input['nationality'];
        $user->email        = $input['email'];
        $user->save();

        return $user;
    }

    private function registerUserToEvent($input, $user, $event)
    {
        $userEvent = new UserEvent;
        $userEvent->user_id         = $user->id;
        $userEvent->event_id        = $event->id;
        $userEvent->bike_type       = $input['bike_type'];
        $userEvent->is_elite        = isset($input['is_elite']) ? $input['is_elite'] : 0;
        $userEvent->category        = $input['category'];
        $userEvent->tshirt_size     = $input['tshirt_size'];
        $userEvent->save();

        return $userEvent;
    }

    private function recordTransaction($refNo, $paymentMethod, $user, $event)
    {
        $userTrans = new UserTransaction;
        $userTrans->user_id         = $user->id;
        $userTrans->transaction_no  = $refNo;
        $userTrans->event_id        = $event->id;
        $userTrans->payment_method  = $paymentMethod;
        $userTrans->amount          = $this->amount;
        $userTrans->status          = 'unpaid';
        $userTrans->save();

        return $userTrans;
    }

    private function processPayment($refNo, $slug)
    {
        $merchantRef    = $refNo;
        $amount         = $this->amount;

        $successURL     = url('/').'/events/'.$slug.'/success';
        $failURL        = url('/').'/events/'.$slug.'/failed';

        $token = sha1($this->merchantID . $merchantRef . '{' . $this->transactionKey . '}');

        $fields = [
            'merchantID'            => $this->merchantID,
            'merchantRef'           => $merchantRef,
            'amount'                => $amount,
            'successURL'            => $successURL,
            'failURL'               => $failURL,
            'token'                 => $token,
            'returnPaymentDetails'  => 'Y'
        ];

        $params = http_build_query($fields);

        return $this->transactURL.'?'.$params;
    }
}
