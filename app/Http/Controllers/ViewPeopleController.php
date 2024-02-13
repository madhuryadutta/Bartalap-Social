<?php

namespace App\Http\Controllers;

use App\Models\PublicProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ViewPeopleController extends Controller
{
    public function index()
    {
        return view('find_people');
    }

    public function fetchPeopleData()
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $data = DB::select('call FindConnections(?,?,@outmsg)', [$current_user_id, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data' => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function viewProfile($id)
    {
        $current_user_id = auth()->id();
        $user_name = $id;

        $PublicProfiles = PublicProfile::where('username', '=', $user_name)->take(1)->get();
        foreach ($PublicProfiles as $PublicProfile) {
            $request_user_id = $PublicProfile->user_id;
        }
        if ($request_user_id == $current_user_id) {
            return redirect('/me');
        } else {
            $data = compact('user_name');

            return view('userProfile')->with($data);
        }
    }

    public function viewProfileData(Request $request)
    {
        $user_name = $request['username'];
        $dsk = $this->dsk;
        $data = DB::select('call ViewUserProfileData(?,?,@outmsg)', [$user_name, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data' => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }
}
