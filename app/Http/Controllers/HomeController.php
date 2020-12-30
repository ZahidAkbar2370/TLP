<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
//view data run time on use panel    
    public function index()
    {
    	$slider=DB::Select('SELECT * from tbl_slider');
    	$socialmedias=DB::Select('SELECT * from tbl_socialmedia');

    	return view('pages.home_content')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider);
    }
     public function gallery_index()
    {
        $gallary=DB::Select('SELECT * from tbl_gallary');
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');

        return view('pages.gallery')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider)->with('gallarys',$gallary);
    }
    public function video_index()
    {
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $video=DB::Select('SELECT * from tbl_video');

        return view('pages.video')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider)->with('videos',$video);
    }
    public function tarana_index()
    {
       
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $tarana=DB::Select('SELECT * from tbl_tarana');

        return view('pages.tarana')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider)->with('taranas',$tarana);
    }
    public function contactus_index()
    {
       
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');

        return view('pages.contactus')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider);
    }
    public function khtmynabuwat_index()
    {
       
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $khtmynabuwat=DB::Select('SELECT * from tbl_khtmynabuwat');

        return view('pages.khtmynabuwat')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider)->with('khtmynabuwats',$khtmynabuwat);
    }
    public function sunnatpak_index()
    {
       
        $slider=DB::Select('SELECT * from tbl_slider');
        $socialmedias=DB::Select('SELECT * from tbl_socialmedia');
        $sunnatpak=DB::Select('SELECT * from tbl_sunnatpak');

        return view('pages.sunnatpak')->with('all_socialmedia',$socialmedias)->with('all_slider',$slider)->with('sunnatpaks',$sunnatpak);
    }
//user view contact form    
    public function contact()
    {
    	return view('admin.contact');
    }
//user send msg to admin panel    
    public function message(Request $request)
    {
    	$name=$request->input('name');
    	$email=$request->input('email');
    	$message=$request->input('message');

    	$result=DB::insert("INSERT into tbl_message values(?,?,?,?,?,?)",[null,$name,$email,$message,null,null]);

    	if($result)
    	{
    		return view('admin/contact')->with('messages',"Message Sent Successfully");
    	}
    	else
    	{

    		return view('admin/contact');
    	}

    }
}
