@section('title')
    <title>Books</title>
@endsection

@extends('layouts.home')

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <form class="navbar-form navbar-left" role="search" method="POST" action="/book/search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" value="" name="search_text">
                    <input type="hidden" value="<?=csrf_token()?>" name="_token">
                    <button type="submit" class="btn btn-default">Search</button>
                </div>
            </form>
        </div>
        @section('content')

            <div class="content top-space">
                <div class="half-title m-a-md">
                    Books
                </div>

                <?php $counter = 0; ?>

                <div class="row">
                    @foreach($info as $book)
                        <?php
                        $counter++;
                        if ($counter > 4) {
                            echo '</div>';
                            echo '<div class="row">';
                            $counter = 1;
                        }
                        ?>


                        <div class="book">
                            <img src="<?=$book['Image']?>" width="128"/>
                            <br>
                            <div class="book-title">
                                <?=$book['Title'] . ' by ' . $book['Author']; ?>

                                <?='Price: ' . $book['Price']; ?> <br>

                                <a class="button btn btn-default"
                                   href="/book/details/<?=$book['book_id']?> ">Details</a>
                                    <div class="stars">
                                        <form method="POST" action="/book/rate/{{ $book['book_id'] }}" name="rating" >
                                            <input class="star star-5" id="{{ $book['book_id'] }}-star-5" type="radio" name="{{ $book['book_id'] }}-star" value = "5" <?=($books['rating']==5 ? 'checked="checked"' : '');?> <?=(!Auth::check())?'onclick="return false;"' : '';?>/>
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star" value = "4" <?=($book['rating']==4 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star" value = "3" <?=($book['rating']==3 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star" value = "2" <?=($book['rating']==2 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star" value = "1" <?=($book['rating']==1 ? 'checked="checked"' : '');?><?=(!Auth::check())?'onclick="return false;"' : '';?>/>
                                            <label class="star star-1" for="star-1"></label>
                                            <textarea name="comment"></textarea>
                                            <?=(Auth::check())? '<input type="submit" value="rate" class = "button">' : '';?>
                                            <input type="hidden" value = "{{csrf_token()}}" name = "_token">

                                        </form>
                                    </div>

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    </div>
</nav>

@endsection

