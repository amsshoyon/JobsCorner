<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Application;
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

            $check = Application::where('job_id', $id)->where('user_id', $user->id)->get();

            if(count($check) > 0){
                return back()->with('error', 'You already applied to this job.'); 
            }else{

                $store = new Application;
                $store->user_id = $user->id;
                $store->job_id = $id;
    
                $store->save();
    
                return back()->with('success', 'Application Submited. Thank You.'); 
            }

        }else{
            return redirect('/profile')->with('error', 'Profile Incomplete, Update first.');
        }
        
    }

    // Application
    //=====================================
    public function store(Request $request){

    }
}
