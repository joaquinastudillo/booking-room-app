@extends('layouts.app')

@section('content')

<div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <a href="/home" class="navbar-brand">Room Scheduler</a>
        </nav>
</div>

<div id="headerMenu" class="container">
        <ul class="nav justify-content-end">
                <li class="nav-item">
                <a href="{{ url('/showpanel/'.$user_id) }}" class="btn btn-primary" id="endDayButton" tabindex="-1" role="button" aria-disabled="true">Bookings</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="btn btn-primary" id="endDayButton" tabindex="-1" role="button" aria-disabled="true">Rooms</a>
                </li>
        </ul>
</div>

<div class="container">
    
    <div class="col-md-12">
    <h1>My Calendar</h1>
        <h6>You may want to check your meetings.</h6>
        <h6>Click on 'Administration' to manage your bookings.</h6>
    <hr>

    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

    </div>

</div>
@endsection
