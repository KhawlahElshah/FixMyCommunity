<?php

namespace App;



class report extends model
{
    //

    protected $guarded = [];


    public function type(){

        return $this->belongsTo('\App\reporttype','type_id');
    }


    public function council(){

        return $this->belongsTo('\App\council','council_id');
    }
   


    
}
