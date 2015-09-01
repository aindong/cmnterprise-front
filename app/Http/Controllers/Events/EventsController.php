<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;
use App\Models\User;
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

        // REGISTER A USER
        $user = $this->registerUser($input);

        if (! $user) {
            return redirect()
                ->back()
                ->withInput();
        }

        // REGISTER A USER TO EVENT
        $this->registerUserToEvent($user);

        // RECORD TRANSACTION
        $this->recordTransaction($refNo, '7-Connect');

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
        $user->birthdate    = strtotime($input['birthdate']);
        $user->gender       = $input['gender'];
        $user->mobilenumber = $input['mobilenumber'];
        $user->nationality  = $input['nationality'];
        $user->save();

        return $user;
    }

    private function registerUserToEvent($user)
    {

    }

    private function recordTransaction($refNo, $paymentMethod)
    {

    }

    private function processPayment($refNo, $slug)
    {
        $merchantRef    = $refNo;
        $amount         = '200';

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
