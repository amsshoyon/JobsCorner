<?php

namespace App\Http\Controllers;
use App\Job;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    // Home Page View
    //====================================
    public function index()
    {
        return view('main.pages.home.index');
    }
    // About Page View
    //====================================
    public function about()
    {
        $page_title = "About Us";
        return view('main.pages.about.index')-> with(compact('page_title'));  
    }
    // Member Page View
    //====================================
    public function candidates()
    {
        $page_title = "Candidates";
        return view('main.pages.members.index')-> with(compact('page_title'));  
    }
    // Contact Page View
    //====================================
    public function contact()
    {
        $page_title = "Contact Us";
        return view('main.pages.contact.index')-> with(compact('page_title'));  
    }

    // Job list View
    //====================================
    public function getJob()
    {
        $jobs = Job::all();
        $page_title = "Recent Jobs";
        return view('main.pages.jobs.index')-> with(compact('page_title','jobs'));  
    }

    // Single Job View
    //====================================
    public function JobDetails($id)
    {
        $job = Job::find($id);
        $page_title = $job->title;
        return view('main.pages.jobs.view_job')-> with(compact('page_title', 'job'));  
    }

}
