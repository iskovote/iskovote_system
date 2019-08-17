<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //

    protected $table = 'tbl_candidates';
    protected $fillable = [
    	"student_no",
    	"picture",
    	"bio",
    	"p_id",
    	"party_id",
    	"election_id",
        "vote_standing"
    ];
    protected $primarykey = 'c_id';
}
