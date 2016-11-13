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
<div class="stars">
    <form method="POST" action="/book/rate/{{ $books->book_id }}" name="rating" >
        <input class="star star-5" id="star-5" type="radio" name="star" value = "5" <?=($books['rating']==5 ? 'checked="checked"' : '');?> <?=(!Auth::check())?'onclick="return false;"' : '';?>/>
        <label class="star star-5" for="star-5"></label>
        <input class="star star-4" id="star-4" type="radio" name="star" value = "4" <?=($books['rating']==4 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
        <label class="star star-4" for="star-4"></label>
        <input class="star star-3" id="star-3" type="radio" name="star" value = "3" <?=($books['rating']==3 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
        <label class="star star-3" for="star-3"></label>
        <input class="star star-2" id="star-2" type="radio" name="star" value = "2" <?=($books['rating']==2 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
        <label class="star star-2" for="star-2"></label>
        <input class="star star-1" id="star-1" type="radio" name="star" value = "1" <?=($books['rating']==1 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
        <label class="star star-1" for="star-1"></label>
        <textarea name="comment"></textarea>
        <?=(Auth::check())? '<input type="submit" value="rate" class = "button">' : '';?>
        <input type="hidden" value = "{{csrf_token()}}" name = "_token">

    </form>
</div>

@endsection
