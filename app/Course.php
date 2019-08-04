<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'tbl_courses';
    protected $fillable = [
    	"course_name"
    ];
    protected $primarykey = 'course_id';
    public $timestamps = false;
}
