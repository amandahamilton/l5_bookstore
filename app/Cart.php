<?php
/**
 * Cart Model
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

//creating Cart model
class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = ['user_id', 'book_id', 'quantity'];

    //setting relationships for Cart model
    public function book () {
        return $this->hasOne('App\book', book_id);
    }
}
