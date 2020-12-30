<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class KhtmynabuwatController extends Controller
{
    public function index()
    {
    	return view('khtmynabuwat.add_khtmynabuwat');
    }
//view all data    
    public function all_khtmynabuwat()
    {
    	$khtmynabuwat=DB::Select('SELECT * from tbl_khtmynabuwat');
    	return view('khtmynabuwat/all_khtmynabuwat')->with('all_khtmynabuwats',$khtmynabuwat);
    }
//save data 
    public function save_khtmynabuwat(Request $request)
    {
    	$khtmynabuwat_title=$request->input('khtmynabuwat_title');
        $khtmynabuwat_detail=$request->input('khtmynabuwat_detail');
        $khtmynabuwat_reference=$request->input('khtmynabuwat_reference');
        $khtmynabuwat_link=$request->input('khtmynabuwat_link');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_khtmynabuwat values(?,?,?,?,?,?,?,?)",[null,$khtmynabuwat_title,$khtmynabuwat_detail,$khtmynabuwat_reference,$khtmynabuwat_link,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-khtmynabuwat');
    	}
    	else
    	{
			return view('/add-khtmynabuwat');
    	}
    }
//delete selected data 
    public function delete_khtmynabuwat($id)
    {
    	$delete=DB::Delete("DELETE From tbl_khtmynabuwat WHERE khtmynabuwat_id='$id'");

    	return redirect('/all-khtmynabuwat');
    }

// change publication to unactive
    public function unactive_khtmynabuwat($khtmynabuwat_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_khtmynabuwat SET publication_status='$publication_status_value' WHERE khtmynabuwat_id='$khtmynabuwat_id'");

        return redirect('/all-khtmynabuwat');
    }
// change publication to active
    public function active_khtmynabuwat($khtmynabuwat_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_khtmynabuwat SET publication_status='$publication_status_value' WHERE khtmynabuwat_id='$khtmynabuwat_id'");

        return redirect('/all-khtmynabuwat');
    }
//edit selected data 
    public function edit_khtmynabuwat($khtmynabuwat_id)
    {
        $select=DB::select("SELECT * from tbl_khtmynabuwat  WHERE khtmynabuwat_id='$khtmynabuwat_id'");

        return view('/khtmynabuwat/edit_khtmynabuwat')->with('selected_khtmynabuwat',$select);
    }
//update selected data 
    public function update_khtmynabuwat(Request $request,$khtmynabuwat_id)
    {
        $khtmynabuwat_title=$request->input('khtmynabuwat_title');
        $khtmynabuwat_detail=$request->input('khtmynabuwat_detail');
        $khtmynabuwat_reference=$request->input('khtmynabuwat_reference');
        $khtmynabuwat_link=$request->input('khtmynabuwat_link');
        $publication_status=$request->input('publication_status');

        $update=DB::update("UPDATE tbl_khtmynabuwat SET khtmynabuwat_title='$khtmynabuwat_title',khtmynabuwat_detail='$khtmynabuwat_detail',khtmynabuwat_reference='$khtmynabuwat_reference',khtmynabuwat_link='$khtmynabuwat_link' WHERE khtmynabuwat_id='$khtmynabuwat_id'");

        return redirect('/all-khtmynabuwat');
    }
}
