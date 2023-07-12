<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use App\Models\PublicProfile;
use Session;


class HomePageController extends Controller
{
    public function index()
    {
        $current_user_id = auth()->id();
        $PublicProfiles = PublicProfile::where('user_id', '=', $current_user_id)->take(1)->get();
        foreach ($PublicProfiles as $PublicProfile) {
            $ProfilePic = $PublicProfile->profile_pic;

            session()->put('profile_pic', $ProfilePic);
            Session::put('profile_pic', $ProfilePic);
        }
        return view('home');
    }

    public function HomePostData()
    {

        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $data = DB::select('call HomePostData(?,?,@outmsg)', array($current_user_id, $dsk));
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = array(
            'data' => $data,
            'outmsg' => $outmsg
        );
        echo json_encode($resp_obj);
    }
    public function trigger()
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $data = DB::select('call AutomatedTrigger(?,?,@outmsg)', array($current_user_id, $dsk));
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = array(
            'data' => $data,
            'outmsg' => $outmsg
        );
        echo json_encode($resp_obj);
    }
}
