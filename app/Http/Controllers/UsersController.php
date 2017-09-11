<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\reporttype;
use \App\council;
use \App\report;
use \App\user;
use \App\state;
class UsersController extends Controller
{
    //
    public function index(reporttype $types,council $councils,state $states){
       
        
        $types=reporttype::all();
        $councils=council::all();
        $users=user::all();
        $states=state::all();
        
        
        return view('settings.super',compact('types','councils','users','states'));

    }

    public function show(report $reports){

        $reports=report::all();

        return view('settings.default',compact('reports'));

    }


    
}
