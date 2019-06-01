<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'tbl_positions';
    protected $fillable = ['position'];
    protected $primarykey = 'p_id';
    public $timestamps = false;
}
