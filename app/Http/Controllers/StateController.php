<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\State;
class StateController extends Controller
{
    //

    public function add(){


        $this->validate(request(),['name'=>'required'] );

        State::create(request(['name']));
        return redirect()->route('show');
    }
}
