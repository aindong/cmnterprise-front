<?php
namespace App\Http\Api\Events;

use App\Http\Controllers\Controller;
use App\Models\Event;

class EventsController extends Controller
{
    public function index()
    {
        $events = Event::all();

        return $events;
    }

    public function getEventBySlug($slug)
    {
        $event = Event::where('slug', $slug)->first();

        return $event;
    }

    public function getEventById($id)
    {
        $event = Event::find($id);

        return $event;
    }
}