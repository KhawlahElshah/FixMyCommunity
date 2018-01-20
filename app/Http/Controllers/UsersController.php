<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\reporttype;
use \App\council;
use \App\report;
use \App\user;
use \App\state;
use Illuminate\Support\Facades\DB;
class UsersController extends Controller
{
    //

    

    public function update(Request $request){
       
                $this->validate(request(),['usernamefield'=>'required',
                                            'useremailfield'=>'required']);

            //dd($request->usernamefield);
                DB::table('users')->where('id',$request->useridfield)->update(['name'=>$request->usernamefield, 'email'=>$request->useremailfield]);
                return redirect('/dashboard');
            }
        
        
            public function destroy(Request $request){
                
              DB::table('councils')->where('user_id', $request->useridfielddelete)->delete();
              DB::table('users')->where('id', $request->useridfielddelete)->delete();
              return redirect('/dashboard');
            }


    
}
