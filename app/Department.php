<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    //

    public function hotel(){

        
        return $this->belongsTo('App\Hotels');
    }
}
