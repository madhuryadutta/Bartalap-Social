<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\User;
use DB;
use Session;

class ProfileController extends Controller
{
    //
    public function viewProfile()
    {
        $session_id = Session::get('login_web_59ba36addc2b2f9401580f014c7f58ea4e30989d');

        $profile = DB::table('profiles')->where('id',$session_id)->first();
        $user = DB::table('users')->where('id',$session_id)->first();
        $data= compact('profile','user');
        return view('profile')->with($data);
    }
    public function index()
    {
        return view('profile_update_form');
    }
    public function store(Request $request)
    {
        $profile = new Profile;
        $profile->id = $request['id'];
        $profile->gender = $request['gender'];
        $profile->occupation = $request['occupation'];
        $profile->dob = $request['dob'];
        $profile->marital_status = $request['marital_status'];
        $profile->current_city = $request['current_city'];
        $profile->hometown = $request['hometown'];
        $profile->hometown = $request['hometown'];
        $profile->about_me = $request['about_me'];
        $profile->save();
        return view('profile');
    }
}
