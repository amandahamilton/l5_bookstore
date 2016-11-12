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

                                            <a class="button btn btn-default" href = "/book/details/<?=$book['book_id']?> ">Details</a>


                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

    </div>
</nav>

@endsection

