<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
use App\Models\UserEvent;
use App\Models\UserTransaction;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    protected $transactURL    = 'http://testpay.7-eleven.com.ph:8888/transact';
    protected $inquireURL     = 'http:// testpay.7-eleven.com.ph:8888/inquire';
    protected $transactionKey = 'fc9c9d077b2bb26d559dab5df8a457703ce14d894dc0ffb2dee7bf6dfaaff1f6';
    protected $merchantID     = 'shimano_test';

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
//        $user = $this->registerUser($input);
//
//        if (! $user) {
//            return redirect()
//                ->back()
//                ->withInput();
//        }

        // REGISTER A USER TO EVENT
//        $this->registerUserToEvent($input, $user, $event);

        // RECORD TRANSACTION
        $this->recordTransaction($refNo, '7-Connect', 1, $event);

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
        print_r($input); exit;
        $user = null;

        $user = new User;
        $user->firstname    = $input['firstname'];
        $user->lastname     = $input['lastname'];
        $user->middlename   = $input['middlename'];
        $user->birthdate    = strtotime($input['birthdate']);
        $user->gender       = $input['gender'];
        $user->mobilenumber = $input['mobilenumber'];
        $user->nationality  = $input['nationality'];
        $user->save();

        return $user;
    }

    private function registerUserToEvent($input, $user, $event)
    {
        $userEvent = new UserEvent;
        $userEvent->user_id         = $user->id;
        $userEvent->event_id        = $event->id;
        $userEvent->bike_type       = $input['bike_type'];
        $userEvent->is_elite        = $input['is_elite'];
        $userEvent->category        = $input['category'];
        $userEvent->tshirt_size     = $input['tshirt_size'];
        $userEvent->save();

        return $userEvent;
    }

    private function recordTransaction($refNo, $paymentMethod, $user, $event)
    {
        $userTrans = new UserTransaction;
        $userTrans->user_id         = 1;
        $userTrans->transaction_no  = $refNo;
        $userTrans->event_id        = $event->id;
        $userTrans->payment_method  = $paymentMethod;
        $userTrans->amount          = 500;
        $userTrans->status          = 'unpaid';
        $userTrans->save();

        return $userTrans;
    }

    private function processPayment($refNo, $slug)
    {
        $merchantRef    = $refNo;
        $amount         = '500';

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
