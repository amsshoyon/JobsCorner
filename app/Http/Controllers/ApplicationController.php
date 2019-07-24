<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    // Apply
    // ====================================
    public function apply($id){
        $job_id = $id;
        $page_title = "Apply Now";
        return view('main.pages.application.index')-> with(compact('job_id', 'page_title'));  
    }

    // Application
    //=====================================
    public function store(Request $request){

    }
}
