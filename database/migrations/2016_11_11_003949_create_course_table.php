<?php
/**
 * Course Migration Table - Creating course table for l5_bookstore database with
 * appropriate fields.
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-1-14
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('course_id');
            $table->integer('book_id')->length(10)->nullable()->unsigned();
            $table->string('instructor')->nullable(false);
            $table->string('course_name')->nullable(false);

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