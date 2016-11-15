<?php
/**
 * Stock Migration Table - Creating stock table for l5_bookstore database with
 * appropriate fields.
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {
            $table->integer('book_id')->length(10)->unsigned();
            $table->primary('book_id');
            $table->integer('quantity')->unsigned()->default(0);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('stock');
    }
}
