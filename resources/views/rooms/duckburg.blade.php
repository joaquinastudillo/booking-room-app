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
                    <li class="nav-item">
                    <a href="{{ url('/rooms') }}" class="btn btn-primary" id="endDayButton" tabindex="-1" role="button" aria-disabled="true">Back</a>
                    </li>
            </ul>
    </div>

    <div class="container">
        
        <div class="col-md-12">
        <h1>Duckburg</h1>
        <hr>


        {!! $calendar_duckburg->calendar() !!}
        {!! $calendar_duckburg->script() !!}

        </div>

    </div>
@endsection

@section('scripts')
<!-- Scripts -->

@endsection
