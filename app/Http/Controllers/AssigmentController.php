<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assigment;

class AssigmentController extends Controller
{
    //
    public function list(){
        $assignments= Assigment::all();
        // dd($assignments);
        return view ('/newviews/assment',[
            "assignments"=>$assignments
        ]);
    }
    public function store(){
    //   dd(request('body'));
        $ass= new Assigment();
        $ass->body=request('body');
        $ass->save();

        return back();
    }

    
}
