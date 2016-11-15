{{--
 * Details View Page.
 * View that displays textbook details (title, author, ISBN, price,
 * and star rating of textbook
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 --}}
@extends('layouts.home')

@section('title')
    <title>Shopping Cart</title>
@endsection

{{--create table to display necessary information--}}
@section('content')

    <table border="0">
        <tr class="tbl_header">
            <th>Title</th>
            <th>Author</th>
            <th>Price</th>
            <th>Quantity</th>

        </tr>
        {{--<img src="{{ $cart['Image'] }}" width="128"/>--}}

        <?php foreach ($result as $item) { ?>


        {{--gather information for table from CartController varables--}}
        <tr>
            <td><?=$item['title']?></td>
            <td><?=$item['author']?></td>
            <td><?=$item['sell_price']?></td>
            <td><?=$item['quantity']?></td>
        </tr>
        <?php } ?>


    </table>
@endsection



