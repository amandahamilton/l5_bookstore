<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table = 'course';

    public $primaryKey = array('user_id', 'book_book');

    public function book () {
        return $this->belongsToOne('App\book', 'book_id');
    }
    public function user () {
        return $this->belongsToOne('App\user', 'user_id');
    }
}
