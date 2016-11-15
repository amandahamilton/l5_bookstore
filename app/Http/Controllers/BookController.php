<?php
/**
 * BookController
 * This controller has the functionality that will display, search,
 * find details, and rate a book(s).
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
namespace App\Http\Controllers;

use App\book;
use App\course;
use App\stock;
use App\cart;
use App\rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    //function that will display all books in the database on the display page.
    public function display()
    {
        $info = array();
        $books = Book::all();

        foreach ($books as $book) {
            $cartCheck = Cart::where([
                ['user_id', '=', Auth::id()],
                ['book_id', '=', $book->book_id]
            ])->exists();

            $info[] = array(
                'book_id' => $book->book_id,
                'Title' => $book->title,
                'Author' => $book->author,
                'Price' => $book->sell_price,
                'rating' => $book->rating,
                'Image' => $book->imagePath,
                'cartCheck' => $cartCheck,
            );
        }
        return view('book/list')->with('info', $info);
    }

//function that will search the database for book by title, author, instructor or course_name.
    public function search()
    {
        $results = array();
        $searchStr = "%" . Input::get('search_text') . "%";
        $books = Book::where('title', 'LIKE', $searchStr)
            ->orWhere('isbn', 'LIKE', $searchStr)->get();

        $courses = Course::where('course_name', 'LIKE', $searchStr)
            ->orWhere('instructor', 'LIKE', $searchStr)->get();

        if (!($courses->isEmpty()) && $books->isEmpty()) {
            foreach ($courses as $course) {

                $book = Book::where('book_id', '=', $course->book_id)->first();
                $results[] = array(

                    'isbn' => $book->isbn,
                    'title' => $book->title,
                    'author' => $book->author,
                    'imagePath' => $book->imagePath,
                    'course_name' => $course->course_name,
                    'instructor' => $course->instructor

                );
            }
        } else if (!($books->isEmpty()) && $courses->isEmpty()) {

            foreach ($books as $book) {
                $course = Course::where('book_id', '=', $book->book_id)->first();

                $results[] = array(

                    'isbn' => $book->isbn,
                    'title' => $book->title,
                    'author' => $book->author,
                    'imagePath' => $book->imagePath,
                    'course_name' => $course->course_name,
                    'instructor' => $course->instructor,

                );
            }
        } else {
            echo "no result";
        }
        return view('book/search')->with('results', $results);
    }

    public function index()
    {
        return view('index');
    }

    //function that will gather details of the book in the database
    public function details($book_id)
    {

        $book = new Book();
        $books = Book::find($book_id);
        $quantity = stock::where('book_id', '=', $book_id)->first();

        return view('book/details')->with('books', $books)->with('quantity', $quantity);
    }

    //rate function that will rate the book only if logged in. It will also average out the ratings per entry
    public function rate($book_id)
    {

        //check authentication
        if (Auth::check()) {

            //gather ratings, books, and userid and store in variable
            $rating = Input::all();
            $book = Book::find($book_id);
            $user_id = Auth::id();

            //update DB with rating
            DB::insert('insert into `rating` (`user_id`, `book_id`, `rating`, `comment`) values(' . $user_id . ',' . $book_id . ',' . $rating['star'] . ',"' . $rating['comment'] . '")' .
                ' on duplicate key update `rating` = ' . $rating['star'] . ', `comment` =  "' . $rating['comment'] . '";');
        }
        $userRatings = DB::table('rating')->select('rating')->where('book_id', '=', $book_id)->get();
        $average = 0;
        foreach ($userRatings as $userRating) {
            $average += $userRating->rating;
        }
        //get average rating
        $book->rating = $average / count($userRatings);
        $book->save();

        return back();
    }
}
