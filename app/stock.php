<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    protected $table = 'stock';
    public $primaryKey = "book_id";


    public function book() {
        return $this->belongsTo('App\book', 'book_id');
    }
}
