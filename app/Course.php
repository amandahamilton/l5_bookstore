<?php
/**
 * Course Model
 * User: Kim Lawlor & Amanda Hamilton
 * Date: 2016-11-14
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

//creating course model
class Course extends Model
{
    protected $table = 'course';
    public $primaryKey = 'course_id';

    //turn off timestamps
    public $timestamps = false;

    //setting relationships for Course Model
    public function book () {
        return $this->hasOne('App\book', book_id);
    }
}
