<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $connection = 'mysql';
    protected $guarded = [];
    public $timestamps = false;
}
