<?php

?>

@extends('layouts.home')

@section('title')
    <title>L5_Bookstore</title>
@endsection

@section('content')
    <div class="content">
        <div class="title m-b-md">
            ITAS 255 - L5_Bookstore Project
        </div>

        <div class="links">
            <a href="{{ url('/book/display') }}">View Books</a>
        </div>
    </div>
@endsection
