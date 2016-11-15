<?php
/**
 * Cart Migration Table - Creating carttable for l5_bookstore database with
 * appropriate fields.
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-1-14
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->length(10)->unsigned();
            $table->integer('book_id')->length(10)->unsigned();
            $table->integer('quantity')->unsigned()->defualt(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cart');
    }
}
