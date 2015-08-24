<?php

namespace App\Http\Controllers\Events;

use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function index()
    {
        return view('events.index');
    }
}
