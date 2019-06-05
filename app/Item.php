<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //


    public function catergory(){

        return $this->belongsTo('App\Catergory');
    }

    public function hotel(){
        return $this->belongsTo('App\Hotels');
    }

    public function location(){

        return $this->belongsTo('App\Location');
    }

    public function storage(){
        return $this->belongsTo('App\storage');
    }

    public function department(){

        return $this->belongsTo('App\Department');
    }
}
