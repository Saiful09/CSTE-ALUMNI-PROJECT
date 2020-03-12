<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class FrontController extends Controller
{
    public function index(){
    	return view('FrontView.home.homeContent');
    }

    public function postjob(){
    	return view('FrontView.about.about');
    }

     public function activity(){
    	return view('FrontView.activity.activityContent');
    }
    public function gallery(){
    	return view('FrontView.gallery.galleryContent');
    }
    public function organization(){
    	return view('FrontView.blog.blogContent');
    }
    public function sign(){
    	return view('FrontView.sign.signContent');
    }
    public function contact(){
    	return view('FrontView.contact.contactContent');
    }
    public function store(Request $req)

    {    $data=array();
         $data['name']=$req->myName;
         $data['email']=$req->email;
         $data['batch']=$req->batch;
         $data['gender']=$req->gender;
         $data['phone']=$req->phone;
         $data['description']=$req->description;
        $add=DB::table('addregis')->insert($data);

         Session::put('message','Alumni added succesfully!!');
        return redirect('/sign')->with('success', 'Contact saved!');
    }
}
