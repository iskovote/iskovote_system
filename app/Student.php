<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'tbl_students';
    protected $fillable = ['student_no', 'lastname', 'firstname', 'middlename', 'course_id', 'year', 'section', 'email_add'];
} 
