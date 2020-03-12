<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BackendController extends Controller
{
    public function allalumni(){
    	$allalumni=DB::table('addregis')->get();
    	return view('admin.allalumni.allalumni',compact('allalumni'));
    }

    public function viewsingle($id){
    	$allalumni=DB::table('addregis')->where('id',$id)->first();
        return view('admin.singleview.viewsingle')->with('single',$allalumni);
    }
}
