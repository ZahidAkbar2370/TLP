<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class VideoController extends Controller
{
    public function index()
    {
    	return view('videos.add_video');
    }
//view all data    
    public function all_video()
    {
    	$video=DB::Select('SELECT * from tbl_video');
    	return view('videos/all_video')->with('all_videos',$video);
    }
//save data 
    public function save_video(Request $request)
    {
        $video_name=$request->input('video_name');
        $video_link=$request->input('video_link');
    	$video_description=$request->input('video_description');
    	$publication_status=$request->input('publication_status');
    	


    	$result=DB::insert("INSERT into tbl_video values(?,?,?,?,?,?,?)",[null,$video_name,$video_link,$video_description,$publication_status,null,null]);

    	if($result)
    	{
    		return redirect('/all-video');
    	}
    	else
    	{
			return view('/add-video');
    	}
    }
//delete selected data 
    public function delete_video($id)
    {
    	$delete=DB::Delete("DELETE From tbl_video WHERE video_id='$id'");

    	return redirect('/all-video');
    }

// change publication to unactive
    public function unactive_video($video_id)
    {
        $publication_status_value="0";
        $update=DB::update("UPDATE tbl_video SET publication_status='$publication_status_value' WHERE video_id='$video_id'");

        return redirect('/all-video');
    }
// change publication to active
    public function active_video($video_id)
    {
        $publication_status_value="1";
        $update=DB::update("UPDATE tbl_video SET publication_status='$publication_status_value' WHERE video_id='$video_id'");

        return redirect('/all-video');
    }
//edit selected data 
    public function edit_video($video_id)
    {
        $select=DB::select("SELECT * from tbl_video  WHERE video_id='$video_id'");

        return view('/videos/edit_video')->with('selected_video',$select);
    }
//update selected data 
    public function update_video(Request $request,$video_id)
    {
        $video_name=$request->input('video_name');
        $video_link=$request->input('video_link');
        $video_description=$request->input('video_description');
        $publication_status=$request->input('publication_status');

        $update=DB::update("UPDATE tbl_video SET video_link='$video_link',video_name='$video_name',video_description='$video_description' WHERE video_id='$video_id'");

        return redirect('/all-video');
    }
}
