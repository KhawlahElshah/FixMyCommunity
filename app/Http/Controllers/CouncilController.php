<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\council;


class CouncilController extends Controller
{
    //


    public function create(){
        
        
        $items = council::all(['name', 'id']);
       // return view::make('report', compact('items',$items));

            }


    public function add(Request $request){
                
              // dd($request);
            $this->validate(request(),['councilnamefieldadd'=>'required',
                                        'useridfieldselect'=>'required']);
                    
               // council::create(request((['name','user_id'])));
                council::create(['name'=>$request->councilnamefieldadd, 'user_id'=>$request->useridfieldselect]);
          
            return redirect('/dashboard');
               
              
                      
                }        
    
     public function update(Request $request){

                    
                    $this->validate(request(),['councilnamefield'=>'required']);
                   
                    DB::table('councils')->where('id',$request->councilidfield)->update(['name'=>$request->councilnamefield]);
                    return redirect('/dashboard');

                }
    public function destroy(Request $request){

        DB::table('reports')->where('council_id', $request->councilidfielddelete)->delete();
        DB::table('councils')->where('id', $request->councilidfielddelete)->delete();
        return redirect('/dashboard');
    }
        
 
}
