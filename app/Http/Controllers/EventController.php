<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Show all events
    public function index() {
        $events = Event::orderBy('start_date')->get();

        return view('events.index', compact('events'), [
            'events' => Event::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    //Show single events
    public function show(Event $event) {
        return view('events.show', [
            'event' => $event
        ]);
    }

    // Show Create Form
    public function create() {
        return view('events.create');
    }

    // Store Listing Data
    public function store(Request $request) {
        $formFields = $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Event::create($formFields);

        return redirect('/')->with('message', 'Event created successfully!');
    }

    // Show Edit Form
    public function edit(Event $event) {
        return view('events.edit', ['event' => $event]);
    }

    // Update Event Data
    public function update(Request $request, Event $event) {
        
        $formFields = $request->validate([
            'title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'tags' => 'required',
            'description' => 'required'
        ]);

        if($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $event->update($formFields);

        return redirect('/')->with('message', 'Event updated successfully!');;
    }

    // Delete Event
    public function destroy(Event $event) {
        
        $event->delete();
        return redirect('/')->with('message', 'Event deleted successfully');
    }
    
}
