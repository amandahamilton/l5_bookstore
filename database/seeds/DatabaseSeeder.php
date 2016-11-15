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

        DB::table('book')->insert([
            'isbn' => '9780133776744 ',
            'title' => 'Starting Out with Java: Early Objects, 5th Edition',
            'author' => "Tony Gladis",
            'sell_price' => 158.00,
            'rating' => "",
            'imagePath' => "/images/java.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '1890774561',
            'title' => 'Murach\'s PHP and MySQL',
            'author' => "Joel Murach",
            'sell_price' => 89.99,
            'rating' => "",
            'imagePath' => "/images/php.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '9781305107168',
            'title' => 'Linux+ Guide to Linux Certification – 4th Edition',
            'author' => "Jason W. Eckert",
            'sell_price' => 196.83,
            'rating' => "",
            'imagePath' => "/images/linux.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '1-58714-387-9',
            'title' => 'CCNA Routing and Switching',
            'author' => "Some Author",
            'sell_price' => 59.99,
            'rating' => "",
            'imagePath' => "/images/cisco.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '9781285868349',
            'title' => 'MCSA Guide to Installing and Configuring Microsoft Windows Server 2012 /R2, Exam 70-410',
            'author' => "Greg Tomsho",
            'sell_price' => 128.33,
            'rating' => "",
            'imagePath' => "/images/server.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '978-0-13- 357178-3',
            'title' => 'Web Development and Design Fundamentals with HTML5, seventh edition',
            'author' => "Terry Ann Felke-Morris",
            'sell_price' => 37.97,
            'rating' => "",
            'imagePath' => "/images/html.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '1133135129',
            'title' => 'A+ GUIDE TO HARDWARE ',
            'author' => "Jean Andrews",
            'sell_price' => 116.95,
            'rating' => "",
            'imagePath' => "/images/hardware.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '9781118925157, 1118925157',
            'title' => 'Mastering VMware vSphere 6',
            'author' => "Nick Marshall, Grant Orchard, Josh Atwell, Scott Lowe",
            'sell_price' => 99.99,
            'rating' => "",
            'imagePath' => "/images/vmspere.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '9780136088394',
            'title' => 'Modern Database Management – 10th Edition',
            'author' => "Hoffer, Venkataraman, and Topi",
            'sell_price' => 129.98,
            'rating' => "",
            'imagePath' => "/images/database.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '978-1111309770 ',
            'title' => 'MCTS Guide to Microsoft Windows 7 (Exam # 70-680)',
            'author' => "Byron Wright, Leon Plesniarski",
            'sell_price' => 79.98,
            'rating' => "",
            'imagePath' => "/images/windows.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '978-0538746762',
            'title' => 'New Perspectives on Microsoft Project 2010: Introductory (New Perspectives) 1st Edition',
            'author' => "Rachel Biheller Bunin",
            'sell_price' => 27.99,
            'rating' => "",
            'imagePath' => "/images/msproject.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '559-4565498796',
            'title' => 'Learning Java',
            'author' => "Steven Jones",
            'sell_price' => "49.99",
            'rating' => "",
            'imagePath' => "/images/java2.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '668-546548736',
            'title' => 'Cisco Essentials',
            'author' => "David Johnson",
            'sell_price' => "99.99",
            'rating' => "",
            'imagePath' => "/images/cisco3.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '564-564654684',
            'title' => 'Abraham Silbershatz',
            'author' => "",
            'sell_price' => "98.99",
            'rating' => "",
            'imagePath' => "/images/databaseconcepts.jpg",
        ]);
        DB::table('book')->insert([
            'isbn' => '545-656576812',
            'title' => 'hyperv.jpg',
            'author' => "",
            'sell_price' => "",
            'rating' => "",
            'imagePath' => "",
        ]);
        DB::table('book')->insert([
            'isbn' => '',
            'title' => '',
            'author' => "",
            'sell_price' => "",
            'rating' => "",
            'imagePath' => "",
        ]);


        DB::table('course')->insert([
            'course_name' => 'ITAS 218 - Network Administration and Security',
            'instructor' => "Graham White",
            'book_id' => 4,
        ]);


        DB::table('course')->insert([
            'course_name' => 'ITAS 233 - Windows Server Management',
            'instructor' => "Graham White",
            'book_id' => 5,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 257 - Linux Server Management I',
            'instructor' => "Graham White",
            'book_id' => 5,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 255 - Internet Programming II',
            'instructor' => "Mark Dutchuk",
            'book_id' => 3,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 164 - Project Management',
            'instructor' => "Graham White",
            'book_id' => 11,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 175 - Local Area Networks',
            'instructor' => "Graham White",
            'book_id' => 11,
        ]);

        DB::table('course')->insert([
            'course_name' => 'ITAS155 - Intro to Computer Hardware',
            'instructor' => "Mark Dutchuk",
            'book_id' => 7,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 167 - Applied Operating Systems',
            'instructor' => "Graham White",
            'book_id' => 10,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 191 - Web Authoring',
            'instructor' => "David Croft",
            'book_id' => 6,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 274 - Internet Programming 3',
            'instructor' => "David Croft",
            'book_id' => 6,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 185 - Introduction to Programming Concepts',
            'instructor' => "Mark Dutchuck",
            'book_id' => 1,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 278 - Linux Server Management II',
            'instructor' => "Graham White",
            'book_id' => 1,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 280 - Advanced Wide Area Technologies',
            'instructor' => "Graham White",
            'book_id' => 1,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 288 - Database Design and Administration',
            'instructor' => "Mark Dutchuk",
            'book_id' => 2,
        ]);
        DB::table('course')->insert([
            'course_name' => 'ITAS 181 - Applied Network Operating Systems',
            'instructor' => "Graham White",
            'book_id' => 3,
        ]);
                DB::table('stock')->insert([
                    'book_id' => "1",
            'quantity' => '3',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "2",
            'quantity' => '6',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "3",
            'quantity' => '8',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "4",
            'quantity' => '4',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "5",
            'quantity' => '8',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "6",
            'quantity' => '3',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "7",
            'quantity' => '6',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "9",
            'quantity' => '8',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "10",
            'quantity' => '4',
        ]);
                        DB::table('stock')->insert([
                    'book_id' => "11",
            'quantity' => '4',
        ]);
//                        DB::table('stock')->insert([
//                    'book_id' => "12",
//            'quantity' => '9',
//        ]);
//                        DB::table('stock')->insert([
//                    'book_id' => "13",
//            'quantity' => '10',
//        ]);
//                        DB::table('stock')->insert([
//                    'book_id' => "14",
//            'quantity' => '9',
//        ]);
//                        DB::table('stock')->insert([
//                    'book_id' => "15",
//            'quantity' => '11',
//        ]);
//                        DB::table('stock')->insert([
//                    'book_id' => "16",
//            'quantity' => '5',
//        ]);
    }
}
