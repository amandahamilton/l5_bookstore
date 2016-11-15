<?php
/**
 * Book Migration Table - Creating book table for l5_bookstore database with
 * appropriate fields.
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('book_id');
            $table->string('isbn')->unique()->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('author')->nullable(false);
            $table->decimal('sell_price', 5,2)->nullable(false);
            $table->string('rating')->nullable();
            $table->string('imagePath')->nullable(false);
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('book');
    }
}
