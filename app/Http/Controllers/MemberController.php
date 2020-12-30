<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class MemberController extends Controller
{
   public function index()
    {
    	return view('member.add_member');
    }
//view all data    
    public function all_member()
    {
    	$member=DB::Select('SELECT * from tbl_member');
    	return view('member/all_member')->with('all_members',$member);
    }
//save data 
    public function save_member(Request $request)
    {
    	$member_email=$request->input('member_email');
    	$member_name=$request->input('member_name');
    	$member_cnic=$request->input('member_cnic');
    	$member_contactno=$request->input('member_contactno');
    	$member_city=$request->input('member_city');
    	$member_address=$request->input('member_address');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_member values(?,?,?,?,?,?,?,?,?,?)",[null,$member_name,$member_email,$member_cnic,$member_contactno,$member_city,$member_address,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-member');
    	}
    	else
    	{
			return view('/add-member');
    	}
    }
//delete selected data 
    public function delete_member($id)
    {
    	$delete=DB::Delete("DELETE From tbl_member WHERE member_id='$id'");

    	return redirect('/all-member');
    }

// change publication to unactive
    public function unactive_member($member_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_member SET publication_status='$publication_status_value' WHERE member_id='$member_id'");

        return redirect('/all-member');
    }
// change publication to active
    public function active_member($member_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_member SET publication_status='$publication_status_value' WHERE member_id='$member_id'");

        return redirect('/all-member');
    }
//edit selected data 
    public function edit_member($member_id)
    {
        $select=DB::select("SELECT * from tbl_member  WHERE member_id='$member_id'");

        return view('/member/edit_member')->with('selected_member',$select);
    }
//update selected data 
    public function update_member(Request $request,$member_id)
    {
        $member_email=$request->input('member_email');
    	$member_name=$request->input('member_name');
    	$member_cnic=$request->input('member_cnic');
    	$member_contactno=$request->input('member_contactno');
    	$member_city=$request->input('member_city');
    	$member_address=$request->input('member_address');
    	$publication_status=$request->input('publication_status');


        $update=DB::update("UPDATE tbl_member SET member_name='$member_name',member_email='$member_email',member_cnic='$member_cnic',member_contactno='$member_contactno',member_city='$member_city',member_address='$member_address' WHERE member_id='$member_id'");

        return redirect('/all-member');
    }
}
