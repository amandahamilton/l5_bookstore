<?php
/**
 * Rating Model
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $table = 'rating';
    protected $fillable = ['user_id', 'book_id', 'rating', 'comment'];
    public $primaryKey = array('user_id', 'book_id');

    //creating relationships for Rating model
    public function book () {
        return $this->belongsToOne('App\book', 'book_id');
    }
    public function user () {
        return $this->belongsToOne('App\user', 'user_id');
    }
}
