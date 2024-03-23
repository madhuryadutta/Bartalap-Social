<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function createpost(Request $request)
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;

        $ipost_text = $request['text'];
        // $ipost_location = $request['ipost_location'];
        // $ivisibility = $request['ivisibility'];
        // $ipromotional_status = $request['ipromotional_status'];
        // $ipost_status = $request['ipost_status'];
        $ipost_location = '1';
        $ivisibility = 0;
        $ipromotional_status = 0;
        $ipost_status = '0';

        $ipostid = rand();

        $filename = 'post.'.time().'.'.$request->file('file')->getClientOriginalExtension();
        $request->file('file')->storeAs('userposts', $filename);

        $data = DB::select('call SaveUserPost(?,?,?,?,?,?,?,?,?,@outmsg)', [$current_user_id, $ipostid, $ipost_text, $filename, $ipost_location, $ivisibility, $ipromotional_status, $ipost_status, $dsk]);

        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function getSingleUserPosts(Request $request)
    {
        $zero_value = 0;
        $iusername = $request['username'];
        $dsk = $this->dsk;

        $data = DB::select('call SingleUserPostsData(?,?,?,@outmsg)', [$zero_value, $iusername, $dsk]);

        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }
}
