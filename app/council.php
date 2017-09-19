<?php

namespace App;

use Illuminate\Support\Facades\Input;
use Request;
class council extends model
{
    //

   

    public function reports(){
        
                return $this->hasMany('\App\report','council_id');
            }

public function user(){

    return $this->belongsTo('\App\User', 'user_id');
}
    // public function reports(){
        
    //         return $this->hasMany('\App\report');
    //     }

         
// public static function getreports(Request $request){
    
//         $selectedcouncil= $request->input('council_id');
//         dd($selectedcouncil);
        
//         return \App\council::find($selectedcouncil)->reports->count();
//     }
}
