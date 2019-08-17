<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Election extends Model
{
    //
    protected $table = 'tbl_elections';
    protected $fillable = [
    	"electionname",
    	"term",
    	"startdate",
    	"starttime",
    	"enddate",
    	"endtime"
    ];
    protected $primarykey = 'election_id';
}
