<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller {
    
    public function show($id) {
        $event = Event::findOrFail($id);
        return Inertia::render('EventDetail', [
            'event' => $event,
        ]);
    }
}
