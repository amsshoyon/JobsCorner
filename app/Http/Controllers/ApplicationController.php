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
        if($user->Resume && $user->image && $user->Skill){
            $job_id = $id;
            $page_title = "Apply Now";
            return view('main.pages.application.index')-> with(compact('job_id', 'page_title'));  
        }else{
            $page_title = "Update Profile";
            return view('main.pages.members.update')-> with(compact('user', 'page_title'));  
        }
        
    }

    // Application
    //=====================================
    public function store(Request $request){

    }
}
