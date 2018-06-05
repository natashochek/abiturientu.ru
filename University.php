<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    //
    protected $fillable = ['name', 'description', 'partners', 'src'];
    
    public function comments(){
        return $this->hasMany('App\Ccomment');
    }
}
