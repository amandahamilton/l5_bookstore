<?php
/**
 * Book Model
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'book';
    public $primaryKey = 'book_id';

    //turn off timestamps
    public $timestamps = false;

    //setup relationships for book model
    public function course()
    {
        return $this->belongTo('App\course', 'course_id');
    }

    public function stock()
    {
        return $this->belongsToMany('App\stock', 'book_id');
    }
    public function cart() {
        return $this->belongsToMany('App\User', 'cart')->withPivot('quantity');
    }


}
