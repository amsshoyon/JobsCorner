<?php

namespace App\Http\Controllers;
use File;
use Auth;
use App\User;
use App\Resume;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // Index View
    //=================================
    public function index(){
        $user = Auth::user();
        $page_title = "Update Profile";
        return view('main.pages.members.update')-> with(compact('user', 'page_title'));  
    }

    // Update Profile
    //=================================
    public function update(Request $request, $id){
        $update = User::findOrFail($id);

        if ($request->hasFile('image')) {

            if(isset($update->image) || !empty($update->image)){
                if (File::exists(public_path('/images/user/'.$update->image))) {
                    unlink(public_path('/images/user/'.$update->image));
                }
            }
            
            $image_name = time().'.'.$request->image->getClientOriginalExtension();
            $path= $request->file('image')->move(public_path('/images/user'), $image_name);
            $update->image = $image_name;

        } 

        if ($request->hasFile('resume')) {

            $resume = Resume::where('user_id', $id)->first();

            if($resume){

                if (File::exists(public_path('/resumes/'.$resume->resume))) {
                    unlink(public_path('/resumes/'.$resume->resume));
                }

                $resume_name = $request->file('resume')->getClientOriginalName();
                $resume_name = preg_replace('/\s+/', ' ', $resume_name);
                $resume_name = preg_replace('/\s+/', '_', $resume_name);
                $path= $request->file('resume')->move(public_path('/resume'), $resume_name);

                $resume->resume = $resume_name;
                $resume->save();  

            }else{
                $store = new Resume;

                $resume_name = $request->file('resume')->getClientOriginalName();
                $resume_name = preg_replace('/\s+/', ' ', $resume_name);
                $resume_name = preg_replace('/\s+/', '_', $resume_name);
                $path= $request->file('resume')->move(public_path('/resume'), $resume_name);

                $store->user_id = $id;
                $store->resume = $resume_name;

                $store->save();
            }
        } 
        

        $update->skills = $request['skills'];
        $update->firstname = $request['firstname'];
        $update->lastname = $request['lastname'];

        $update->save();             
        return back()->with('success', 'Profile Updated');

    }
}
