<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class GallaryController extends Controller
{
    public function index()
    {
    	return view('gallary.add_gallary');
    }
//view all data    
    public function all_gallary()
    {
    	$gallary=DB::Select('SELECT * from tbl_gallary');
    	return view('gallary/all_gallary')->with('all_gallarys',$gallary);
    }
//save data 
    public function save_gallary(Request $request)
    {
        $gallary_name=$request->input('gallary_name');
    	$gallary_image=$request->input('gallary_image');
        $gallary_description=$request->input('gallary_description');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_gallary values(?,?,?,?,?,?,?)",[null,$gallary_name,$gallary_image,$gallary_description,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-gallary');
    	}
    	else
    	{
			return view('/add-gallary');
    	}
    }
//delete selected data 
    public function delete_gallary($id)
    {
    	$delete=DB::Delete("DELETE From tbl_gallary WHERE gallary_id='$id'");

    	return redirect('/all-gallary');
    }

// change publication to unactive
    public function unactive_gallary($gallary_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_gallary SET publication_status='$publication_status_value' WHERE gallary_id='$gallary_id'");

        return redirect('/all-gallary');
    }
// change publication to active
    public function active_gallary($gallary_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_gallary SET publication_status='$publication_status_value' WHERE gallary_id='$gallary_id'");

        return redirect('/all-gallary');
    }
//edit selected data 
    public function edit_gallary($gallary_id)
    {
        $select=DB::select("SELECT * from tbl_gallary  WHERE gallary_id='$gallary_id'");

        return view('/gallary/edit_gallary')->with('selected_gallary',$select);
    }
//update selected data 
    public function update_gallary(Request $request,$gallary_id)
    {
        $gallary_name=$request->input('gallary_name');
        $gallary_image=$request->input('gallary_image');
        $gallary_description=$request->input('gallary_description');
        $publication_status=$request->input('publication_status');

        $update=DB::update("UPDATE tbl_gallary SET gallary_image='$gallary_image',gallary_name='$gallary_name',gallary_description='$gallary_description' WHERE gallary_id='$gallary_id'");

        return redirect('/all-gallary');
    }
}
