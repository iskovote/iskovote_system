<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $table = 'tbl_students';
    protected $guard = 'user';
    protected $primarykey = 'student_no';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'student_no',
        'student_pw',
        'lastname',
        'firstname',
        'middlename',
        'course_id',
        'year',
        'section',
        'email_add'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remembertoken'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

}
