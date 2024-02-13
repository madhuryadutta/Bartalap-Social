<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function index()
    {
        return view('messages');
    }

    public function fetchMessagePeopleList()
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $data = DB::select('call MessagePeople(?,?,@outmsg)', [$current_user_id, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data' => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function fetchMessagePeopleDetailList(Request $request)
    {
        $user_id = $request['userid'];
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $data = DB::select('call GetPeopleDetForMsgList(?,?,@outmsg)', [$user_id, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data' => $data,
            'outmsg' => $outmsg,
            'iam' => $current_user_id,
        ];
        echo json_encode($resp_obj);
    }

    public function fetchMessages(Request $request)
    {
        $current_user_id = auth()->id();
        $user_id = $request['user_id'];
        $dsk = $this->dsk;
        $data = DB::select('call getMessages(?,?,?,@outmsg)', [$current_user_id, $user_id, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data' => $data,
            'outmsg' => $outmsg,
            'iam' => $current_user_id,
        ];
        echo json_encode($resp_obj);
    }

    public function sendMessage(Request $request)
    {
        $current_user_id = auth()->id();
        $receiver = $request['receiver'];
        $msg_data = $request['msg_data'];
        $iMsgNo = $request['msg_id'];
        $iMsgRef = '0';
        $iMsgType = 'TXT';

        $dsk = $this->dsk;
        $data = DB::select('call NewMessage(?,?,?,?,?,?,?,@outmsg)', [$current_user_id, $receiver, $msg_data, $iMsgRef, $iMsgType, $iMsgNo, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');
        $resp_obj = [
            'data' => $data,
            'outmsg' => $outmsg,
            'iam' => $current_user_id,
        ];
        echo json_encode($resp_obj);
    }
}
