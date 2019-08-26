<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Org extends Model
{
    protected $table = 'tbl_orgs';
    protected $fillable = [
    	'org_name',
    	'org_logo',
    	'course_id'
    ];
    protected $primarykey = 'org_id';
    public $timestamps = false;
}
