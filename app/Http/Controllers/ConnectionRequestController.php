<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ConnectionRequestController extends Controller
{
    public function index()
    {
        return view('connection');
    }
    public function sendRequest(Request $request)
    {

        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        $to_user  = $request['to_user'];
        $r_type  = $request['r_type'];

        $data = DB::select('call friendrequest(?,?,?,?,@outmsg)', array($current_user_id, $to_user, $r_type, $dsk));

        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = array(
            'data' => $data,
            'outmsg' => $outmsg
        );
        echo json_encode($resp_obj);
    }

    public function getRequestList(Request $request)
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        $data = DB::select('call getFriendRequestList(?,?,@outmsg)', array($current_user_id, $dsk));
        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = array(
            'data' => $data,
            'outmsg' => $outmsg
        );
        echo json_encode($resp_obj);
    }
    public function getMyFriendList(Request $request)
    {
        $profile_id  = $request['user_id'];
        $dsk = $this->dsk;

        $data = DB::select('call getMyFriendList(?,?,@outmsg)', array($profile_id, $dsk));
        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = array(
            'data' => $data,
            'outmsg' => $outmsg
        );
        echo json_encode($resp_obj);
    }

    public function RequestAction(Request $request)
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        $reqest_no  = $request['R_no'];

        $action_response_type  = $request['R_type'];

        $data = DB::select('call AcceptDeclineFriendRequest(?,?,?,?,@outmsg)', array($current_user_id, $reqest_no, $action_response_type, $dsk));

        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = array(
            'data' => $data,
            'outmsg' => $outmsg
        );
        echo json_encode($resp_obj);
    }
}
