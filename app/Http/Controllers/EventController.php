<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        return Event::with("locations.city")->get();
    }

    public function show(Event $event)
    {
        $event->load('locations.city');

        return view('events.show', compact('event'));
    }
}
