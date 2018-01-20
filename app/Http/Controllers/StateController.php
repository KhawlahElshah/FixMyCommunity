<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\State;
use Illuminate\Support\Facades\DB;
class StateController extends Controller
{
    //

    public function add(){


        $this->validate(request(),['name'=>'required'] );

        State::create(request(['name']));
        return redirect('/dashboard');
    }

    public function update(Request $request,State $state){

        $this->validate(request(),['statenamefield'=>'required']);
        DB::table('states')->where('id',$request->stateidfield)->update(['name'=>$request->statenamefield]);
        return redirect('/dashboard');
    }


    public function destroy(Request $request){
    
      DB::table('reports')->where('status_id', $request->stateidfielddelete)->delete();  
      DB::table('states')->where('id', $request->stateidfielddelete)->delete();
      return redirect('/dashboard');
    }
}
