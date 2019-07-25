<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('Candidate');
    }

    // Apply
    // ====================================
    public function apply($id){
        $user = Auth::user();
        if(isset($user->Resume) && isset($user->image) && isset($user->skills)){
            $job_id = $id;
            $page_title = "Apply Now";
            return view('main.pages.application.index')-> with(compact('job_id', 'page_title'));  
        }else{
            return redirect('/profile')->with('error', 'Profile Incomplete, Update first.');
        }
        
    }

    // Application
    //=====================================
    public function store(Request $request){

    }
}
