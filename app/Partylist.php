<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partylist extends Model
{
    protected $table = 'tbl_partylists';
    protected $fillable = [
    	"party_inital",
    	"party_name"
    ];
}
