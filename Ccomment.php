<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ccomment extends Model
{
    //
    protected $fillable = ['nickname','comment','university_id','created_at'];
    
    public function post(){
        return $this->belongsTo('App\University');
    }
}
