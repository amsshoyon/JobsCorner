<?php

namespace App\Http\Controllers;
use Auth;
use App\Job;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;

class JobController extends Controller
{
    public function __construct()
    {
        $this->middleware('Company');
    }

    // Index view
    //=====================================
    public function PostJob(){
        $page_title = "Post a Job";
        return view('main.pages.post_job.index')-> with(compact('page_title'));  
    }

    // My Jobs
    //=====================================
    public function MyJobs(){
        $user_id = Auth::user()->id;
        $page_title = "My Jobs";
        $jobs = User::find($user_id)->job;
        return view('main.pages.jobs.my_jobs')-> with(compact('page_title', 'jobs'));  
    }

    // View Candidates
    //======================================
    public function candidates(){
        $page_title = "Candidates";
        $user = Auth::user()->id;
        $jobs = Job::where('user_id', $user)->get();

        // return($candidates);
        return view('main.pages.members.index')-> with(compact('page_title', 'jobs'));  
        
    }

    // Store Job
    //=====================================
    public function store(JobRequest $request){

        $store = new Job;
        $store->user_id = Auth::user()->id;
        $store->title = $request->input('title');
        $store->salary = $request->input('salary');
        $store->location = $request->input('location');
        $store->country = $request->input('country');
        $store->description = $request->input('description');

        $store->save();

        return back()->with('success', 'Job has been Posted. Thank You.');
    }

    // Edit Jobs
    //=====================================
    public function edit($id){
        $job = Job::find($id);
        $page_title = "Edit Job Details";
        return view('main.pages.post_job.index')-> with(compact('page_title', 'job'));  
    }

    // Edit Jobs
    //=====================================
    public function update(JobRequest $request, $id){
        $update = Job::findOrFail($id);

        $update->title = $request['title']; 
        $update->salary = $request['salary']; 
        $update->location = $request['location']; 
        $update->country = $request['country']; 
        $update->description = $request['description'];

        $update->save();             
        return back()->with('success', 'Job Post Updated');

    }

    // Destroy Jobs
    //=====================================
    public function destroy($id){
        $delete = Job::find($id); 
        $delete->delete();
        return redirect('/my_jobs')->with('success', 'Job Post has been Deleted');
    }
}
