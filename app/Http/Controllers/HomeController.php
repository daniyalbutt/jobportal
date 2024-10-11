<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\UserProfile;
use App\Models\EducationBackground;
use App\Models\WorkExperience;
use App\Models\SpecialQualification;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function userUpload(Request $request){
        $this->validate($request,[
            'phone' => 'required',
            'job_description' => 'required',
            'address' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip_code' => 'required',
            'about_us' => 'required'
        ]);
        $imageName = null;
        if($request->hasFile('user_image')){
            $imageName = time().'.'.$request->user_image->extension();
            $request->user_image->move(public_path('users'), $imageName);
        }

        $user_profile = UserProfile::updateOrCreate(['user_id' => Auth::user()->id], [
            'user_image' => $imageName,
            'phone' => $request->phone,
            'website' => $request->website,
            'job_description' => $request->job_description,
            'address' => $request->address,
            'country' => $request->country,
            'state' => $request->state,
            'city' => $request->city,
            'zip_code' => $request->zip_code,
            'about_us' => $request->about_us,
            'google' => $request->google,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin
        ]);

        return redirect()->back()->with('success', 'Profile Updated Successfully');
    }

    public function userUploadCv(Request $request){
        $source = $request->source;
        $data = $request->data;
        $data['user_id'] = Auth::user()->id;
        if($source == 'education_backgrounds'){
            $user_data = EducationBackground::create($data);
        }
        if($source == 'work_experiences'){
            $user_data = WorkExperience::create($data);
        }
        if($source == 'special_qualifications'){
            $user_data = SpecialQualification::create($data);
        }
        return response()->json(['status' => 'Profile Updated Successfully', 'data' => $user_data, 'response' => true, 'source' => $source]);
    }
}
