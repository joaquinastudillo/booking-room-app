<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}" >
        <script> window.Laravel = { csrfToken: '{{ csrf_token() }}' } </script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
        </style>
    </head>
    <body>
        <div class="centered-box">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}"  class="btn btn-primary">Login</a>

                        @if (Route::has('register'))
                            <!--<a href="{{ route('register') }}">Register</a>-->
                        @endif
                    @endauth
                </div>
            @endif
        </div>
        <style>
        .centered-box{
            margin: 0;
            display: flex;
            width: 98vw;
            height: 90vh;
            flex-direction: row;
            border: 1px solid;
            justify-content: center;
            align-items: center;margin: 0;
            display: flex;
            width: 98vw;
            height: 90vh;
            flex-direction: row;
            border: 1px solid;
            justify-content: center;
            align-items: center;
        }
        </style>
    </body>
</html>
