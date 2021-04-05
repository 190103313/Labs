<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function index() 
    {
        return view('form_profile');
    }

    public function add(Request $request) 
    {
        $profile = new Profile();
        
        $profile->name = $request->input('name');
        $profile->surname = $request->input('surname');
        $profile->email = $request->input('email');
        
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('uploads', $filename);
            $profile->photo = $filename;
        } else {
            return $request;
            $profile->photo = '';
        }

        $profile->save();

        return view('form_profile')->with('form_profile', $profile);
    }

    public function showProfile($profile_id) {
        $profile = Profile::where('id', $profile_id)->first();

        if($profile == null) {
            return response('Profile with such id does not exist', 404);
        }

        return view('profiles')->with(['profile'=>$profile]);
    }

    public function showProfiles() {
        $profiles = Profile::all();

        return view('all-profiles')->with(['profiles'=>$profiles]);
    }
}