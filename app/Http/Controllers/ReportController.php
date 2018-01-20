<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use \App\report;
use \App\council;
use \App\reporttype;
use \App\state;
use \App\user;
use Auth;

class ReportController extends Controller
{

    //

    public function index(council $councilitems, reporttype $reporttypeitems){

        $councilitems = council::all(['name', 'id']);
        $reporttypeitems=reporttype::all('name','id');
        return view('contents.index',compact('councilitems','reporttypeitems'));
        //return view('report');
       
    }

    public function create( ){
       
       
       // $reporttypeitems=reporttype::all('name','id');
        $councilitems = council::all(['name', 'id']);

        // $vars= array(
        //     'reporttypeitems'=>reporttype::all('name','id'),
        //     'councilitems' => council::all(['name', 'id'])
        // );
       // return view::make('report', array('councilitems'=>$councilitems));

       
        return view('reports.create',compact('councilitems',$councilitems));
       
       
    }


    public function store(Request $request){
        
        // revise this function 
       
        //dd($request->all());
        
        $this->validate(request(),[
            'type_id'=>'required',
            'council_id'=>'required',
            'danger'=>'required',
            'status_id'=>'required',
            'lat'=>'required',
            'lng'=>'required'
        ]);

        //dd($request->all());
        report::create(request((['type_id', 'council_id','danger','desc','lat','lng','status_id'])));
        $request->session()->flash('alert-success', 'لقد تم إسال بلاغك, شكرا على تعاونك.');
        return redirect('/');
    }


    public function show(council $councilitem){

        $councilitems = council::all(['name', 'id']);
        $high=0;
        $locations = DB::table('reports')->select('lat', 'lng')->get();
      // dd($locations);
      
      
        return view('reports.show',compact('councilitems','$high','locations'));
    }

   
public function update(Request $request){

$this->validate(request(),['stateidfieldselect'=>'required']);
DB::table('reports')->where('id',$request->reportidfield)->update(['status_id'=>$request->stateidfieldselect]);
return redirect('/dashboard');
}




public function showdashboard(reporttype $types,council $councils,state $states,report $reports){

    //for superadmin view
    $types=reporttype::all();
    $councils=council::all();
    $users=user::all();
    $states=state::all();
   
    
    if(Auth::guest())
    {
        
        return redirect('/login');
        
    }
    else
    {
        //dd(Auth::user());
         if(Auth::user()->email =='k.tawfik@hc.ly')
         {
           
                
           
         return view('settings.super',compact('types','councils','users','states'));
         
        
         }
          else{

            //for users view
            $currentuser=Auth::user();
           // dd($currentuser);
            $currentcouncil=$currentuser->council;
            if($currentcouncil == null)
            {
                return view('layouts.error');
            }
            else{
            $councilreports=$currentcouncil->reports;

           
         return view('settings.default',compact('currentuser','currentcoucnil','councilreports','states'));
       // return view('reports.Dashboard',compact('types','councils','users','states','currentuser','currentcoucnil','councilreports'));
        } 
    }   
       //  return view('reports.Dashboard',compact('types','councils','users','states','currentuser','currentcoucnil','councilreports'));
}

}
   
}
