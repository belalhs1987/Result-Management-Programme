<?php
namespace App\Http\Controllers;
use App\Event\UserRegistered;
use Validator;
use Session;
use Mail;
use Redirect;
use DB;
 
use App\loginuser;
use App\recovery_password_log;

use Illuminate\Http\Request;

class loginController extends Controller
{
	   public function userRegisterForm(){
			return view('register');
		}
		 public function register(Request $request){
		 	$enc_password = md5($request->password);
		 	//dd($enc_password);
	 	$validator = Validator::make($request->all(), [
	 		'username' => 'required',
	 		'password' => 'required|confirmed|between:6,200',
	 		'password_confirmation' => 'required',
	 		'email' => 'required|email'

	 	]);
	 	if($validator->fails()){
	 		return redirect('userRegisterForm')
	 						->withErrors($validator)
	 						->withInput();
	 	}else{
	 		 
	 		 $loginuser 	= new loginuser;
	 		 $loginuser->username 	=$request->username;
	 		 $loginuser->password 	=$request->password;
	 		 $loginuser->enc_password 	=$enc_password;
	 		 $loginuser->email 	=$request->email;
	 		  $loginuser->save();

	 		  event(new UserRegistered($loginuser));
	 		  return $loginuser;

	 		 // return redirect('/');

		 	}

		}
   
  
  	 	public function login(Request $request){
  		$enc_password =md5($request->password);

  		$checkLoginInfo= loginuser::where('username', $request->username)
  		->where('password', $request->password)
  		->get();

  		if($checkLoginInfo->isEmpty()==false){
  			session(['loggedIn' =>'true']);
  			return redirect('homepage');
  		}else{
  			return redirect('/');
  		}
	   }
	   public function logout(){
	   	Session::flush();
	   	return redirect('/');
	   }

	   public function forgetPassword(){
	   	return view('recover_password');
	   }

	   public function recoverPasswordMethod(Request $request){
	   //	$username = $request->username;
	   	$email = $request->email;
	   	$token = md5($email);
	    $recoverInfo = emailExists($email);//helper function for email checking

		 if(empty($recoverInfo) == true){
		 	return Redirect::back()->withErrors(['msg','Invalid Email']);
			    //Session::flash('message','msg');
		       // return redirect('forgetPassword');
			   }else{
			   	$id =getUseridByEmail($email); //helper function to get id
			   	$recovery_password_log = new recovery_password_log;
			    $recovery_password_log->userId = $id;
			   	$recovery_password_log->enc_email = $token;
			   	$recovery_password_log->status = 0;
			   	$recovery_password_log->save();

			    $mail = Mail::send('mailTemplate',['token'=>$token], function ($message) use ($email){
			    	$message->from('belal@gmail.com','BKiict mail setup');
			    	$message->to($email);
			    	$message->subject('Personal Project mail testing');
			    });
			      Session::flash('message','Email has been sent. Please check your email to recover password.');
			      return Redirect::back();
		         //return redirect('forgetPassword');
			   }
	   }
	   public function recoveryPassword($token){
	    $checkValidation = recovery_password_log::where('enc_email',$token)
	    			->where('status',0)
	    			->get();
	    		if( $checkValidation->isEmpty()==false){
	    			//Session::flash('message','Valid request');
	    			$userId = getUseridByEncMail($token); //helper function
	    			return view('recover_pass_mail_form', compact('userId'));
	    		}else{
	    			Session::flash('message','Invalid request');
	    			return view('404');
	    		}
	   }
	   public function updatePasswordMethod(Request $request){
	    
	    	//$enc_password = md5($request->password);
	    	$validator = Validator::make($request->all(),[
	    		'password' => 'required|confirmed|between:6,200',
	    		'password_confirmation' => 'required'
	    	]);
	    	if($validator->fails()){
	 		return Redirect::back()
	 						->withErrors($validator)
	 						->withInput();
	    	}
	    	else{
	    		loginuser::where('id',$request->userId)->update(array(
	    			'password'=>$request->password,
	    		));

	    		//or
	    		/*
	    		DB::table('loginusers')
		        ->where('id', $request->userId)  // find your id by their userID
		        ->limit(1)  // optional - to ensure only one record is updated.
		        ->update(array('password' => $request->password)); */
		        recovery_password_log::where('userId',$request->userId)->update(array(
	    			'status'=>1,
	    		));
		        Session::flash('message','Password updated successfully');
		        return view('password_recovery_success');

	    	}
	   }
}
