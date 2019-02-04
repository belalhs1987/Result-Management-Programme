<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\post;
use Redirect;
use App\loginuser;

class postController extends Controller
{
	public function postMethod(){
   $post=post::all();
   return json_decode($post);
   //dd($post);
   }   
   public function postInsert(Request $request){
   	//dd($request->all());
   	$input = input::all();
   	$post = new post($input);
   	$post->save();
   	return Redirect::back();
   }
   public function getUser($id){
   	$user = loginuser::find($id);
      return view('dataPrac',compact('user'));
   	//dd($user);
   	//dd($user->getAddress);
   }
}
