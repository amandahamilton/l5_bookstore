<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'cart';

    public $primaryKey = '';
    public $timestamps = false;
    public function book () {
        return $this->hasOne('App\book', book_id);
    }
}
