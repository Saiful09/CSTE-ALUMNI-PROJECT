<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postjob;

class PostjobController extends Controller
{
   public function postjob(){
    	return view('FrontView.about.about');
    }
    
    

    public function job(Request $request){
    	$postjob=new Postjob();
    	$postjob->name=$request->input('name');
    	$postjob->email=$request->input('email');
    	$postjob->post=$request->input('post');
    	if($request->hasfile('image')){
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();
           $filename=time().'.'.$extension;
           $file->move('uploads/postjob/',$filename);
           $postjob->image=$filename;

    	}
    	else{
    		return $request;
    		$postjob->image='';
    	}
    	$postjob->save();
    	return view('FrontView.about.about')->with('postjob',$postjob);

    }
    public function seepost(){
    	$seeposts=Postjob::all();
    	return view('FrontView.seepost.seepost')->with('seeposts',$seeposts);
    }
}
