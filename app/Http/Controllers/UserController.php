<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
   public function index()
    {
    	return view('user.add_user');
    }
//view all data    
    public function all_user()
    {
    	$user=DB::Select('SELECT * from tbl_user');
    	return view('user/all_user')->with('all_users',$user);
    }
//save data 
    public function save_user(Request $request)
    {
    	$user_image=$request->input('user_image');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_user values(?,?,?,?,?)",[null,$user_image,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-user');
    	}
    	else
    	{
			return view('/add-user');
    	}
    }
//delete selected data 
    public function delete_user($id)
    {
    	$delete=DB::Delete("DELETE From tbl_user WHERE user_id='$id'");

    	return redirect('/all-user');
    }

// change publication to unactive
    public function unactive_user($user_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_user SET publication_status='$publication_status_value' WHERE user_id='$user_id'");

        return redirect('/all-user');
    }
// change publication to active
    public function active_user($user_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_user SET publication_status='$publication_status_value' WHERE user_id='$user_id'");

        return redirect('/all-user');
    }
//edit selected data 
    public function edit_user($user_id)
    {
        $select=DB::select("SELECT * from tbl_user  WHERE user_id='$user_id'");

        return view('/user/edit_user')->with('selected_user',$select);
    }
//update selected data 
    public function update_user(Request $request,$user_id)
    {
        $user_image=$request->input('user_image');


        $update=DB::update("UPDATE tbl_user SET user_image='$user_image' WHERE user_id='$user_id'");

        return redirect('/all-user');
    }
}
