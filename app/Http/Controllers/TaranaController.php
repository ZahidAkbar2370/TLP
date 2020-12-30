<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TaranaController extends Controller
{
    public function index()
    {
    	return view('tarana.add_tarana');
    }
//view all data    
    public function all_tarana()
    {
    	$tarana=DB::Select('SELECT * from tbl_tarana');
    	return view('tarana/all_tarana')->with('all_taranas',$tarana);
    }
//save data 
    public function save_tarana(Request $request)
    {
    	$tarana_name=$request->input('tarana_name');
        $tarana_link=$request->input('tarana_link');
        $tarana_audio=$request->input('tarana_audio');
        $tarana_description=$request->input('tarana_description');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_tarana values(?,?,?,?,?,?,?,?)",[null,$tarana_name,$tarana_description,$tarana_link,$tarana_audio,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-tarana');
    	}
    	else
    	{
			return view('/add-tarana');
    	}
    }
//delete selected data 
    public function delete_tarana($id)
    {
    	$delete=DB::Delete("DELETE From tbl_tarana WHERE tarana_id='$id'");

    	return redirect('/all-tarana');
    }

// change publication to unactive
    public function unactive_tarana($tarana_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_tarana SET publication_status='$publication_status_value' WHERE tarana_id='$tarana_id'");

        return redirect('/all-tarana');
    }
// change publication to active
    public function active_tarana($tarana_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_tarana SET publication_status='$publication_status_value' WHERE tarana_id='$tarana_id'");

        return redirect('/all-tarana');
    }
//edit selected data 
    public function edit_tarana($tarana_id)
    {
        $select=DB::select("SELECT * from tbl_tarana  WHERE tarana_id='$tarana_id'");

        return view('/tarana/edit_tarana')->with('selected_tarana',$select);
    }
//update selected data 
    public function update_tarana(Request $request,$tarana_id)
    {
        $tarana_name=$request->input('tarana_name');
        $tarana_link=$request->input('tarana_link');
        $tarana_audio=$request->input('tarana_audio');
        $tarana_description=$request->input('tarana_description');
        $publication_status=$request->input('publication_status'); 

        $update=DB::update("UPDATE tbl_tarana SET tarana_name='$tarana_name',tarana_description='$tarana_description',tarana_link='$tarana_link',tarana_audio='$tarana_audio' WHERE tarana_id='$tarana_id'");

        return redirect('/all-tarana');
    }
}
