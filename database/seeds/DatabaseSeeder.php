<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10). '@hotmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10). '@hotmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10). '@hotmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10). '@hotmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('users')->insert([
            'name' => str_random(10),
            'address' => str_random(10),
            'email' => str_random(10). '@hotmail.com',
            'password' => bcrypt('secret')
        ]);
        DB::table('book')->insert([
            'isbn' => '123456789',
            'title' => 'JAVA',
            'author' => "Tony Gladis",
            'sell_price' => 120.99,
            'rating' => "",
            'imagePath' => "/images/java.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '456789456',
            'title' => 'PHP',
            'author' => "Joel Murach",
            'sell_price' => 89.99,
            'rating' => "",
            'imagePath' => "/images/php.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '78998745',
            'title' => 'LINUX',
            'author' => "Jason Eckart",
            'sell_price' => "209.99",
            'rating' => "",
            'imagePath' => "/images/linux.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '2225465',
            'title' => 'Cisco',
            'author' => "Some Author",
            'sell_price' => "55.99",
            'rating' => "",
            'imagePath' => "/images/cisco.jpg",
        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'description' => "",
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//        DB::table('book')->insert([
//            'isbn' => '',
//            'title' => '',
//            'author' => "",
//            'sell_price' => "",
//            'rating' => "",
//            'imagePath' => "",
//        ]);
//

        DB::table('course')->insert([
            'course_name' => 'ITAS 255',
            'instructor' => "Mark Dutchuck",
            'book_id' => "1",
        ]);


//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
//        DB::table('course')->insert([
//            'course_name' => '',
//            'instructor' => "",
//            'book' => "",
//        ]);
                DB::table('stock')->insert([
                    'book_id' => "1",
            'quantity' => '3',
        ]);
    }
}
