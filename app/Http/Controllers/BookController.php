<?php

namespace App\Http\Controllers;
use App\book;
use App\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function display()
    {
        $info = array();
        $books = book::all();

        foreach ($books as $book) {

            $info[] = array(
                'book_id' => $book->book_id,
                'Title' => $book->title,
                'Author' => $book->author,
                'Price' => $book->sell_price,
                'Image' => $book->imagePath,
            );
        }
        return view('book/list')->with('info', $info);
    }

    public function search()
    {
        $results = array();
        $searchStr = "%" . Input::get('search_text') . "%";
        $books = book::where('title', 'LIKE', $searchStr)
            ->orWhere('isbn', 'LIKE', $searchStr)->get();

        $courses = course::where('course_name', 'LIKE', $searchStr)
            ->orWhere('instructor', 'LIKE', $searchStr)->get();


        if(!($courses->isEmpty())&& $books->isEmpty()) {
            foreach ($courses as $course){
                echo "courses";

                $book = book::where('book_id', '=', $course->book_id)->first();
                $results[] = array(

                    'isbn'          => $book->isbn,
                    'title'         => $book->title,
                    'author'        => $book->author,
                    'course_name'   => $course->course_name,
                    'instructor'    => $course->instructor

                );
            }

        } else if (!($books->isEmpty()) && $courses->isEmpty()) {

            foreach ($books as $book) {
                $course = course::where('book_id', '=', $book->book_id)->first();
                echo "<br>";
                echo "book: ";
                echo "<br>";
                var_dump($book);
                echo "<br>";
                echo  "Course: ";
                echo "<br>";
                var_dump($course);
                $results[] = array(

                    'isbn'          => $book->isbn,
                    'title'         => $book->title,
                    'author'        => $book->author,
                    'course_name'   => $course->course_name,
                    'instructor'    => $course->instructor

                );
            }


        } else {
            echo "no result";
        }
        return view('book/search')->with('results', $results);
    }

    public function index() {
        return view('index');
    }
    public function details($book_id) {

        $book = new Book();
        $books = book::find($book_id);

        return view('book/details')->with('books', $books);
    }
//    public function update(){
//
//        return view('auth/account');
//    }
}
