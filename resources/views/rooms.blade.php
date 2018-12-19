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
                    <a href="{{ url('/home') }}" class="btn btn-primary" id="endDayButton" tabindex="-1" role="button" aria-disabled="true">Home</a>
                    </li>
            </ul>
    </div>

    <div class="container">
        
        <div class="col-md-12">
        <h1>Rooms Availability</h1>
            <h6>You may want to check the schedule of the rooms.</h6>
            <h6>Click and select the one that you want to check.</h6>
        <hr>


        <div class="btn-group btn-group-lg" role="group" aria-label="Large button group" style="display: flex;justify-content: center;">
            <a href="{{ url('/rooms/tatooine') }}" class="btn btn-primary"tabindex="-1" role="button" aria-disabled="true">Tatooine</a>
            <a href="{{ url('/rooms/goldenrod') }}" class="btn btn-primary"tabindex="-1" role="button" aria-disabled="true">Goldenrod</a>
            <a href="{{ url('/rooms/gotham') }}" class="btn btn-primary"tabindex="-1" role="button" aria-disabled="true">Gotham</a>
            <a href="{{ url('/rooms/duckburg') }}" class="btn btn-primary"tabindex="-1" role="button" aria-disabled="true">Duckburg</a>
        </div>

        </div>

    </div>
@endsection

@section('scripts')
<!-- Scripts -->

@endsection
