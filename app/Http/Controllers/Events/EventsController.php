<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventsController extends Controller
{
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

    public function eventRegistration($slug)
    {

        $refNo = uniqid();

        $merchantRef    = $refNo;
        $amount         = '200';
        $transactURL    = 'http://testpay.7-eleven.com.ph:8888/transact';
        $inquireURL     = 'http:// testpay.7-eleven.com.ph:8888/inquire';
        $transactionKey = 'fc9c9d077b2bb26d559dab5df8a457703ce14d894dc0ffb2dee7bf6dfaaff1f6';
        $merchantID     = 'shimano_test';
        $successURL     = '/events/'.$slug.'/success';
        $failURL        = '/events/'.$slug.'/failed';

        $token = sha1($merchantID . $merchantRef . '{' . $transactionKey . '}');

        $fields = [
            'merchantID'            => $merchantID,
            'merchantRef'           => $merchantRef,
            'amount'                => $amount,
            'successURL'            => $successURL,
            'failURL'               => $failURL,
            'token'                 => $token,
            'returnPaymentDetails'  => 'Y'
        ];

        $params = http_build_query($fields);

        return redirect()->to($transactURL.'?'.$params);
    }

    public function paymentSuccess($slug)
    {
        echo 'Success payment';
    }

    public function paymentFailed($slug)
    {
        echo 'Failed payment';
    }
}
