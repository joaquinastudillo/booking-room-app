<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\User;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Http\Resources\Event as EventResource;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::where('user_id', '=', Auth::id())->get();
        $event = [];
        foreach($events as $row){
            //$enddate = $row->end_date." 24:00:00";
            $event[] = \Calendar::event(    
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'room' => $row->room,
                ]
            );
        }

        $user_id = Auth::id();
        $calendar = \Calendar::addEvents($event);
        return view('home', compact('events', 'calendar', 'user_id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function display($user_id)
    {
        return view('administration', compact('user_id'));
    }

    public function displayTatooine(){
        //tatooine

        $events_tatooine = Event::where('room', '=', 1)->get();
        $event_tatooine = [];
        $id_user = Auth::id();
        $user = User::find($id_user);
        foreach($events_tatooine as $row){
            $event_tatooine[] = \Calendar::event(    
                "Title: ".$row->title. ", Created by: ".$user->name.", ".$user->email,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'room' => $row->room,
                ]
            );
        }
        $calendar_tatooine = \Calendar::addEvents($event_tatooine);
        return view('rooms.tatooine', compact('calendar_tatooine'));
    }

    public function displayGoldenrod(){
        //goldenrod

        $events_goldenrod = Event::where('room', '=', 2)->get();
        $event_goldenrod = [];
        $id_user = Auth::id();
        $user = User::find($id_user);
        foreach($events_goldenrod as $row){
            $event_goldenrod[] = \Calendar::event(    
                "Title: ".$row->title. ", Created by: ".$user->name.", ".$user->email,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'room' => $row->room,
                ]
            );
        }
        $calendar_goldenrod = \Calendar::addEvents($event_goldenrod);
        return view('rooms.goldenrod', compact('calendar_goldenrod'));
    }

    public function displayGotham(){
        //gotham

        $events_gotham = Event::where('room', '=', 3)->get();
        $event_gotham = [];
        $id_user = Auth::id();
        $user = User::find($id_user);
        foreach($events_gotham as $row){
            $event_gotham[] = \Calendar::event(    
                "Title: ".$row->title. ", Created by: ".$user->name.", ".$user->email,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'room' => $row->room,
                ]
            );
        }
        $calendar_gotham = \Calendar::addEvents($event_gotham);
        return view('rooms.gotham', compact('calendar_gotham'));
    }

    public function displayDuckburg(){
        //duckburg

        $events_duckburg = Event::where('room', '=', 4)->get();
        $id_user = Auth::id();
        $user = User::find($id_user);
        $event_duckburg = [];
        foreach($events_duckburg as $row){
            $event_duckburg[] = \Calendar::event(    
                "Title: ".$row->title. ", Created by: ".$user->name.", ".$user->email,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                [
                    'room' => $row->room,
                ]
            );
        }
        $calendar_duckburg = \Calendar::addEvents($event_duckburg);
        return view('rooms.duckburg', compact('calendar_duckburg'));
    }

    public function displayRooms(){
        return view('rooms');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
