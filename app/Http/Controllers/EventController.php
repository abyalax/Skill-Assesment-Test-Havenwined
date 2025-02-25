<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller {
    
    public function index() {
        $events = Event::all();
        return Inertia::render('Events/Events', [
            'events' => $events,
        ]);
    }

    public function show($id) {
        $event = Event::findOrFail($id);
        return Inertia::render('Events/EventDetail', [
            'event' => $event,
        ]);
    }
}
