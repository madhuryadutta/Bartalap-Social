<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PublicProfileController extends Controller
{
    public function index()
    {
        // Storage::disk('uploads')->put('a.txt', 'Contents');
        return view('profile');
    }

    public function fetchMyProfileData()
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        $data = DB::select('call SelfProfileData(?,?,@outmsg)', [$current_user_id, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function saveMyProfileData(Request $request)
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        $name = $request['name'];
        $username = $request['username'];
        $gender = $request['gender'];
        $occupation = $request['occupation'];
        $dob = $request['dob'];
        $current_city = $request['current_city'];
        $home_town = $request['home_town'];
        $relationship_status = $request['relationship_status'];
        $phone_no = $request['phone_no'];
        $about_me = $request['about_me'];

        $data = DB::select('call SaveSelfProfileData(?,?,?,?,?,?,?,?,?,?,?,?,@outmsg)', [$current_user_id, $name, $username, $gender, $occupation, $dob, $current_city, $home_town, $phone_no, $relationship_status, $about_me, $dsk]);

        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function saveMyProfilePic(Request $request)
    {
        // echo '<pre>';
        // print_r($request->all());
        // echo '</pre>';
        // exit;
        $filename = 'profilePic.'.time().'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('uploads', $filename);
        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        // echo $filename;
        // exit;
        $pic_category = 'profile_pic';
        $data = DB::select('call SavePicture(?,?,?,?,@outmsg)', [$current_user_id, $pic_category, $filename, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function saveMyCoverPic(Request $request)
    {
        $filename = 'CoverPic.'.time().'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('uploads', $filename);
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $pic_category = 'cover_pic';
        $data = DB::select('call SavePicture(?,?,?,?,@outmsg)', [$current_user_id, $pic_category, $filename, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }
}
