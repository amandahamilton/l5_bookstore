<?php
/**
 * Stock Model
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

//create Stock model
class Stock extends Model
{
    //turn off timestamps
    public $timestamps = false;
    protected $table = 'stock';
    public $primaryKey = "book_id";

//creating relationships for stock model
    public function book() {
        return $this->belongsTo('App\book', 'book_id');
    }
}
