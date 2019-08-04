<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partylist extends Model
{
    protected $table = 'tbl_partylists';
    protected $fillable = [
    	"party_initial",
    	"party_name"
    ];
    protected $primarykey = 'party_id';
    public $timestamps = false;
}
