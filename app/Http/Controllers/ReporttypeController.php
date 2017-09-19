<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\DatabaseManager;
use Illuminate\Support\Facades\DB;
use \App\reporttype;

class ReporttypeController extends Controller
{
public function add(){

  

    $this->validate(request(),['name'=>'required']);
    
        reporttype::create(request((['name'])));
        
    
      return redirect()->route('show');
      
}
  
public function update(Request $request){

   //dd($request->all());
    $this->validate(request(),['typenamefield'=>'required']);
           
    DB::table('reporttypes')->where('id',$request->typeidfield)->update(['name'=>$request->typenamefield]);
   
    return redirect('/dashboard');

}


public function destroy(Request $request){
//dd($request->all());
    DB::table('reporttypes')->where('id',$request->typeidfielddelete)->delete();
//$type->delete();
return redirect('/dashboard');
}
 
}
