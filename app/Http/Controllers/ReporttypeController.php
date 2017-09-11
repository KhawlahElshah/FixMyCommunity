<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\reporttype;

class ReporttypeController extends Controller
{
public function add(){

  

    $this->validate(request(),['name'=>'required']);
    
        reporttype::create(request((['name'])));
        
    
      return redirect()->route('show');
      
}
   
 
}
