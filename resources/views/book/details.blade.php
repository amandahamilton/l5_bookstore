{{--
 * Details View Page.
 * View that displays textbook details (title, author, ISBN, price,
 * and star rating of textbook
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 --}}
@extends('layouts.home')

@section('title')
    <title>Book Details</title>
@endsection

{{--create table to display necessary information--}}
@section('content')
<table border="0">
    <tr class="tbl_header">
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th>Price</th>
        <th>Quantity</th>
    </tr>
        <img src="{{ $books['imagePath'] }}" width="128"/>
    <br>
    {{--gather information for table from BookController varables--}}
    <br><td><?=$books->title?></td>
    <td><?=$books->author?></td>
    <td><?=$books->isbn?></td>
    <td><?=$books->sell_price?></td>
    <td><?=$quantity?></td>

</table>

{{--insert star ratings that check authentication before rating can be inserted into DB--}}
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



