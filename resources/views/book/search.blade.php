@section('title')
    <title>Books</title>
@endsection

@extends('layouts.home')
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
</div>
        @section('content')
<div class="search_result">

        @foreach ($results as $book)
            <div>
                <p>
                    <label>Title: </label>
                    {{ $book['title'] }}
                </p>
                <p>
                    <label>ISBN: </label>
                    {{ $book['isbn'] }}
                </p>

                <p>
                    <label>Author: </label>
                    {{ $book['author'] }}
                </p>
                <p>
                    <label>Course name: </label>
                    {{ $book['course_name'] }}
                </p>

            </div>
            @endforeach
</div>
            @endsection
</nav>
