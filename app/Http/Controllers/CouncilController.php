<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\council;
class CouncilController extends Controller
{
    //


    public function create(){
        
        
        $items = council::all(['name', 'id']);
       // return view::make('report', compact('items',$items));

            }


    public function add(){
                
                
            $this->validate(request(),['name'=>'required']);
                    
                council::create(request((['name'])));
                        
                    
            return redirect()->route('show');
                      
                }        

}
