<?php
/**
 * Rating Migration Table - Creating rate table for l5_bookstore database with
 * appropriate fields.
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-1-14
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rating', function (Blueprint $table) {
            $table->integer('user_id')->length(10)->unsigned();
            $table->integer('book_id')->length(10)->unsigned();
            $table->primary(array('user_id', 'book_id'));
            $table->integer('rating')->nullable(false);
            $table->string('comment')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course');
    }
}
