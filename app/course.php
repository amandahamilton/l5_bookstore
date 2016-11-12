<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    protected $table = 'course';

    public $primaryKey = 'course_id';

    public function book () {
        return $this->hasOne('App\book', book_id);
    }
}
