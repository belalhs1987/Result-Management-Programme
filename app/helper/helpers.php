<?php 
	use App\loginuser;
	use App\recovery_password_log;

	function emailExists($email){
		 $status = loginuser::where('email', $email)->get();
		 if(!$status->isEmpty()){
		 	return true;
		 }else{
		 	return false;
		 }
	}

	function getUseridByEmail($email){
		$userid = loginuser::where('email', $email)->first();
		return $userid->id;
	}
	function getUseridByEncMail($token){
		$userData = recovery_password_log::where('enc_email',$token)->first();
		return $userData->userId;
	}
?>
