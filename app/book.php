<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $table = 'book';
    public $primaryKey = 'book_id';

public $timestamps = false;
    
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
