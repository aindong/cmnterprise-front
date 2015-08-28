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

    public function eventRegistration()
    {
        $merchantRef    = '';
        $amount         = '';
        $transactURL    = 'http://testpay.7-eleven.com.ph:8888/transact';
        $inquireURL     = 'http:// testpay.7-eleven.com.ph:8888/inquire';
        $transactionKey = '628e936f45884030ac1f34bcde9c28efa6ae9c839623b45b8942bd4490e1f05d';
        $merchantID     = '7-Eleven';
        $successURL     = '';
        $failURL        = '';
        $token = sha1($merchantID . $merchantRef . '{' . $transactionKey . '}');

        $fields = [
            'merchantID'    => $merchantID,
            'merchantRef'   => $merchantRef,
            'amount'        => $amount,
            'successURL'    => $successURL,
            'failURL'       => $failURL,
            'token'         => $token
        ];

        $params = http_build_query($fields);

        \URL::to($transactURL.'?'.$params);
    }
}
