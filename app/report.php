<?php

namespace App;



use Request;
class report extends model
{
    //

 


    public function type(){

        return $this->belongsTo('\App\reporttype','type_id');
    }


    // public function council(){

    //     return $this->belongsTo('\App\council','council_id');
    // }
   

    public function council(){

    return $this->belongsTo('\App\council','council_id');
}

public function state(){

    return $this->belongsTo('\App\state','status_id');
}
    
}
