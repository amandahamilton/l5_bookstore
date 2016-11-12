<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
  protected $table = 'order';

    public $primaryKey = 'order_id';

    /**
     * @return string
     */
    public function cart() {
        return $this->belongsToMany('App\book', 'cart')->withPivot('quantity');

    }
    public function user() {
        return $this->belongsTo('App\User', 'user_id');
    }
}
