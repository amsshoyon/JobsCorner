<?php

namespace App\Http\Controllers;
use File;
use App\User;
use App\Resume;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // Index View
    //=================================
    public function index(){
        
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

                $resume_name = time().'.'.$request->resume->getClientOriginalExtension();
                $path= $request->file('resume')->move(public_path('/resume'), $resume_name);

                $resume->resume = $resume_name;
                $resume->save();  

            }else{
                $store = new Resume;

                $resume_name = time().'.'.$request->resume->getClientOriginalExtension();
                $path= $request->file('resume')->move(public_path('/resume'), $resume_name);

                $store->user_id = $id;
                $store->resume = $resume_name;

                $store->save();
            }
        } 
        

        $update->skills = $request['skills'];

        $update->save();             
        return back()->with('success', 'Profile Updated');

    }
}
