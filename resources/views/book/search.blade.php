{{--
 * Search View Page.
 * View that displays information in database when it is searched
 * by book title, author, isbn, course or instructor.
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 --}}
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
                    <img src="{{ $book['imagePath'] }}" width="128"/>
                </p>
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
                <p>
                    <label>Instructor: </label>
                    {{ $book['instructor'] }}
                </p>

            </div>
            @endforeach
</div>
            @endsection
</nav>
