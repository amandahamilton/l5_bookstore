@extends('layouts.home')

@section('title')
    <title>Book Details</title>
@endsection

@section('content')

<table border="0">
    <tr class="tbl_header">
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Price</th>
        <th>Instructor</th>
        <th>Course</th>
    </tr>

    <td><?=$books->title?></td>
    <td><?=$books->author?></td>
    <td><?=$books->isbn?></td>
    <td><?=$books->price?></td>
    <td><?=$books->instructor?></td>
    <td><?=$books->course_name?></td>

</table>

@endsection
