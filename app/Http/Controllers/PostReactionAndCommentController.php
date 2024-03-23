<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostReactionAndCommentController extends Controller
{
    public function sendReaction(Request $request)
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $ipost_id = $request['post_id'];
        $ivote = $request['vote'];

        $data = DB::select('call PostReaction(?,?,?,?,@outmsg)', [$current_user_id, $ipost_id, $ivote, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function getReactionOfMyown(Request $request)
    {
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $ipost_id = $request['post_id'];
        $data = DB::select('call ReactionData(?,?,?,@outmsg)', [$current_user_id, $ipost_id, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }

    public function newComment(Request $request)
    {
        echo '<pre>';
        print_r($request->all());
        echo '<pre>';
        exit;
        $current_user_id = auth()->id();
        $dsk = $this->dsk;
        $ipost_id = $request['post_id'];
        $comment_id = $request['comment_id'];
        $comment_ref = $request['comment_ref'];
        $comment_type = $request['comment_type'];
        $comment_text = $request['comment_text'];

        $data = DB::select('call newComment(?,?,?,?,?,?,?,@outmsg)', [$current_user_id, $ipost_id, $comment_id, $comment_type, $comment_ref, $comment_text, $dsk]);
        $outmsg = DB::select('select @outmsg as message ');

        $resp_obj = [
            'data'   => $data,
            'outmsg' => $outmsg,
        ];
        echo json_encode($resp_obj);
    }
}
