<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Http\Requests;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Http\Resources\Event as EventResource;
use Illuminate\Support\Facades\Auth;

class EventControllerApi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $events = Event::all();
        return EventResource::collection($events);
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $event = $request->isMethod('put') ? Event::findOrFail($request->id) : new Event;
        $event->title = $request->input('title');
        $event->room = $request->input('room');
        $event->start_date = $request->input('start_date')." ".$request->input('start_time');
        $event->end_date = $request->input('end_date')." ".$request->input('end_time');
        $event->user_id = $request->input('user_id');

        $result_room = Event::where('start_date', '<=', $event->start_date)->where('end_date', '>=', $event->end_date)->where('room',$event->room)->first();

        if(!$result_room){
            $result_user = Event::where('start_date', '<=', $event->start_date)->where('end_date', '>=', $event->end_date)->where('room',$event->room)->first();
            if(!$result_user){
                if($event->save()){
                    return new EventResource($event);
                }
            }else{
                return response()->json(['error' => 'Aparently'], 500);
            }
        }else{
            return response()->json(['error' => 'Apparently you will be busy at that time'], 500);
        }
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
        $event = Event::findOrFail($id);
        if($event->delete()){
            return new EventResource($event);
        }else{
            return response()->json(['error' => 'Error while trying to delete the register'], 500);      
        }
    }
}
