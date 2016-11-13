<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rating extends Model
{
    protected $table = 'rating';
    protected $fillable = ['user_id', 'book_id', 'rating', 'comment'];

    public $primaryKey = array('user_id', 'book_id');

    public function book () {
        return $this->belongsToOne('App\book', 'book_id');
    }
    public function user () {
        return $this->belongsToOne('App\user', 'user_id');
    }
}
