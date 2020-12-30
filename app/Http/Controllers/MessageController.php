<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class MessageController extends Controller
{
    public function all_message()
    {
    	$message=DB::Select('SELECT * from tbl_message');
    	return view('message/all_message')->with('all_messages',$message);
    }
    public function delete_message($id)
    {
    	$delete=DB::Delete("DELETE From tbl_message WHERE message_id='$id'");

    	return redirect('/all-message');
    }
    public function save_message(Request $request)
    {
        $sender_name=$request->input('sender_name');
        $sender_email=$request->input('sender_email');
        $sender_message=$request->input('sender_message');

        $insert=DB::insert('INSERT into tbl_message values(?,?,?,?,?,?,?)',[null,$sender_name,$sender_email,$sender_message,"1",null,null]);

        return redirect('/contactus')->with('message','Message Sent');
    }

}
