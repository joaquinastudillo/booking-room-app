@extends('layouts.app')

@section('content')

<div class="container">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <router-link to="/home" class="navbar-brand">Stock Trader</router-link>
            <ul class="navbar-nav">
                <router-link to="portfolio" class="nav-item" activeClass="active" tag="li">
                    <a class="nav-link">Portfolio</a>
                </router-link>
                <router-link to="/stocks" class="nav-item" activeClass="active" tag="li">
                    <a class="nav-link">Stocks</a>
                </router-link>
            </ul>
        </nav>
</div>

<div id="headerMenu" class="container">
        <ul class="nav justify-content-end">
                <li class="nav-item">
                  <button id="endDayButton" type="button" class="btn btn-info" >End Day</button>
                </li>
                <li class="nav-item">
                  <div class="btn-group">
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Save & Load
                    </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" >Save Data</a>
                            <a class="dropdown-item" >Load Data</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                  <p class="nav-link" href="#">Funds: <strong> 87687 </strong></p>
                </li>
        </ul>
</div>

<div class="container">
    <!--<header-component></header-component>
    <header-menu-component></header-menu-component>-->
    
    <div class="col-md-12">
    <h1>Trade or View your Portfolio</h1>
        <h6>You may Save & Load your Data</h6>
        <h6>Click on 'End Day' to begin a New Day!</h6>
    <hr>

    {!! $calendar->calendar() !!}
    {!! $calendar->script() !!}

    </div>

</div>
@endsection
