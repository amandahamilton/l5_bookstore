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
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-center {
                position: absolute;
                margin: auto;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .half-title {
                font-size: 42px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .container{
                display: flex;
            }

            .book-title {
                margin-bottom: 10px;
            }

            .top-space {
                margin-top: 25%;
            }

            .row {
                -webkit-columns: 250px 4;
                -moz-columns: 250px 4;
                columns: 250px 4;
                -webkit-column-gap: 0;
                -moz-column-gap: 0;
                column-gap: 0;
                -webkit-column-rule: 1px solid;
                -mox-column-rule: 1px solid;
                column-rule: 1px solid;
                height: 250px;
            }

            .m-a-md {
                margin-top: 5%;
                margin-bottom: 5%;
            }

            .link {
                display: block;
                width: 100%;
                height: 100%;
                text-decoration: none;
                color: #636b6f;
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            @if (Auth::check())
                <div class="top-right links">
                    <a href="{{ url('/cart') }}">Cart</a>
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
                    <a href="{{ url('/') }}">Home</a>
                </div>
            @endif

            @yield('content')

        </div>
    </body>
</html>
