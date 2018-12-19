@extends('layouts.app')

@section('content')
    <div class="container">
    <header-component></header-component>
    <header-menu-component></header-menu-component>
    <content-component user-id="{{$user_id}}"></content-component>
    </div>
@endsection

@section('scripts')
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
@endsection

