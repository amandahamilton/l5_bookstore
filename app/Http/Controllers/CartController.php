<?php
/**
 * CartController
 * Cart Controller that will add, and remove items from shopping cart
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-10-24
 */
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Book;
use App\Cart;

use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    //add function that will add a book to the users cart if they are logged in
    public function add($book_id)
    {
        $book = Book::find($book_id);
        $user = Auth::user();

//        var_dump($book_id);
//        echo "-----";
//        var_dump($user);

        if(!DB::table('cart')->where([['user_id', '!=', $user->id], ['book_id', '!=', $book_id]])->exists()) {

            DB::table('cart')->insert(array(
                'book_id' => $book_id,
                'user_id' => $user->id,
                'quantity' => 1,
            ));
        }
        return back();
    }
    //remove from cart function
    public function remove($book_id)
    {

        $user = Auth::user();

        if (DB::table('cart')->where([['user_id', '=', $user->id], ['book_id', '=', $book_id]])->exists()) {
            DB::table('cart')->where([['user_id', '=', $user->id], ['book_id', '=', $book_id]])->delete();
        }

        return back();
    }

    //cart view page that will display users items that they have in their cart
    public function view() {

        $user = Auth::user();
        $carts = DB::table('cart')->where('user_id', '=', $user->id)->get();

        foreach ($carts as $book) {

            $b = DB::table('book')->where('book_id', '=', $book->book_id)->first();

//            var_dump($b);
//           die;

            $result[] = array(
                'book_id' => $book->book_id,
                'title' => $b->title,
                'author' => $b->author,
                'sell_price' => $b->sell_price,
                'image' => $b->imagePath,
                'quantity' => $book->quantity,

            );
        }

        return view('book/cart')->with('result', $result);
    }
}

