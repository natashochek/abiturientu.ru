<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grant extends Model
{
    //
    protected $fillable = ['title', 'description','deadline','url','created_at'];
}
