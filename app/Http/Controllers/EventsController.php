<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventsFormRequest;
use App\Models\Events;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Events::paginate(15);

        return view('events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $event = new Events;
        return view('events.create', compact('event'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventsFormRequest $request)
    {

        Events::create([
            'title' => $request->title,
            'description' => $request->description,
        ]);

        flashy('Evenement creer avec success');


        return Redirect::home();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Events $event)
    {

        return view('events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Events $event)
    {   

        return view('events.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventsFormRequest $request,Events $event)
    {

        $event->update([
            'title' => $request->title, 
            'description' => $request->description,
        ]);

        flashy('Evenement modifier avec success');
        
        return redirect()->route('events.show', $event);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Events $event)
    {
        $event->delete();

        flashy('Evenement suppremer avec success');

        return redirect()->route('home');
    }
}
