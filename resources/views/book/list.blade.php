{{--
 * List View Page.
 * View that displays login input efilds
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 --}}
@section('title')
    <title>Books</title>
@endsection

@extends('layouts.home')


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <form class="navbar-form navbar-left" role="search" method="POST" action="/book/search">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search" value="" name="search_text">
                <input type="hidden" value="<?=csrf_token()?>" name="_token">
                <button type="submit" class="btn btn-default">Search</button>
            </div>
        </form>

        @section('content')
            <div class="wrap">
                <div class="half-title m-a-md">
                    Books
                </div>

                {{--get each book in database--}}
                <?php $counter = 0; ?>
                <div class="result">
                    @foreach($info as $book)
                        <?php
                        $counter++;
                        if ($counter > 3) {
                            echo '</div>';
                            echo '<div class="row">';
                            $counter = 1;
                        }?>

                        {{--<div class="content" style="border:solid">--}}
                            <div class="image">
                                <img src="<?=$book['Image']?>" width="100"/>
                            </div>
                            <div class="book-title">
                                <?=$book['Title'] . ' by ' . $book['Author']; ?>
                            </div>
                            <div class="price">
                                <?='Price: ' . $book['Price']; ?>
                            </div>
                            <div class="links">
                                <a class="button btn btn-default"
                                   href="/book/details/<?=$book['book_id']?> ">Details</a>

                                <?php if(Auth::check()) {
                                if(!$book['cartCheck']) {?>

                                <a href="/book/add/<?=$book['book_id']?>" class="btn btn-success pull-right"
                                   role="button">Add to Cart</a>
                                <?php } else { ?>
                                <a href="/book/remove/<?=$book['book_id']?>" class="btn btn-success pull-right"
                                   role="button">Remove</a>
                                <?php }
                                }?>


                            </div>
                            {{--display user average rating per textbook. do not allow user thats not authenicated to rate book.--}}
                            <div class="stars">
                                <form method="POST" action="/book/rate/{{ $book['book_id'] }}" name="rating">
                                    <input class="star star-5" id="{{ $book['book_id'] }}-star-5" type="radio"
                                           name="{{ $book['book_id'] }}-star"
                                           value="5" <?=($book['rating'] == 5 ? 'checked="checked"' : '');?> <?=(!Auth::check()) ? 'onclick="return false;"' : '';?>/>
                                    <label class="star star-5" for="star-5"></label>
                                    <input class="star star-4" id="star-4" type="radio" name="star"
                                           value="4" <?=($book['rating'] == 4 ? 'checked="checked"' : '');?><?=(!Auth::check()) ? 'onclick="return false;"' : '';?>/>
                                    <label class="star star-4" for="star-4"></label>
                                    <input class="star star-3" id="star-3" type="radio" name="star"
                                           value="3" <?=($book['rating'] == 3 ? 'checked="checked"' : '');?><?=(!Auth::check()) ? 'onclick="return false;"' : '';?>/>
                                    <label class="star star-3" for="star-3"></label>
                                    <input class="star star-2" id="star-2" type="radio" name="star"
                                           value="2" <?=($book['rating'] == 2 ? 'checked="checked"' : '');?><?=(!Auth::check()) ? 'onclick="return false;"' : '';?>/>
                                    <label class="star star-2" for="star-2"></label>
                                    <input class="star star-1" id="star-1" type="radio" name="star"
                                           value="1" <?=($book['rating'] == 1 ? 'checked="checked"' : '');?><?=(!Auth::check()) ? 'onclick="return false;"' : '';?>/>
                                    <label class="star star-1" for="star-1"></label>
                                </form>
                            </div>
                        {{--</div>--}}
                    @endforeach
                </div>
            </div>
    </div>
    @endsection
</nav>

