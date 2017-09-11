<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\report;
use \App\council;
use \App\reporttype;
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


    public function store(){
        
        // revise this function 
        
        $this->validate(request(),[
            'type_id'=>'required',
            'council_id'=>'required',
            'danger'=>'required',
            'status_id'=>'required'
        ]);

       
        report::create(request((['type_id', 'council_id','danger','desc','lat','lng','status_id'])));
     
        return redirect('/');
    }


    public function show(council $councilitem){

        $councilitems = council::all(['name', 'id']);
        return view('reports.show',compact('councilitems',$councilitems));
    }

   
}
