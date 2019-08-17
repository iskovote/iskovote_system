<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VoterStatus extends Model
{
    //
    protected $table = 'tbl_voterstatus';
    protected $fillable = [
    	"student_no",
    	"election_id",
    	"status"
    ];
    protected $primarykey = 'tbl_voterstatus';
    public $timestamps = false;
}
