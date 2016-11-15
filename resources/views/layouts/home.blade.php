<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @yield('title')

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <!-- Styles -->
<link rel="stylesheet" type="text/css" href="/css/rating.css">
        <link rel="stylesheet" type="text/css" href="/css/master.css">
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/book/view') }}">Cart</a>
                    <a href="{{ url('/checkout') }}">Checkout</a>
                    <a href="{{ url('/users/account') }}">Account</a>
                    <a href="{{ url('/logout') }}">Logout</a>
                </div>
            @else
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    <a href="{{ url('/register') }}">Register</a>
                </div>
            @endif

            @if (Request::is('/'))
                {{--<div class="top-left links">--}}
                    {{--<a href="{{ url('/') }}">Home</a>--}}
                {{--</div>--}}
            @else
                <div class="top-left links">
                    <a href="{{ url('/book/display') }}">ITAS Bookstore</a>
                </div>
            @endif

            @yield('content')

        </div>
    </body>
</html>
