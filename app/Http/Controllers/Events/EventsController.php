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

    }
}
