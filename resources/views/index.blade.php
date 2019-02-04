@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	 <div class="container-login100">
	 	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
	 		<h3 class="text-danger"> Account Login</h3>
	 		<form method="post" action="{{ url('login')}}" class="login100-form validate-form">
	 		  {{ csrf_field() }}
	 			<div class="wrap-input100">
	 				<input type="text" name="username" class="wrap-input100 validate-input m-4" data-validate = "Enter username" placeholder="User Name" required>
	 				<span class="focus-input100" data-placeholder="&#xe82a;"></span>
	 				
	 			</div>
	 			 <div class="wrap-input100 validate-input mb-4" data-validate="Enter password">
                    <input class="input100" type="password" name="password" placeholder="Password" required>
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="container-login100-form-btn m-4">
                    <input type="submit" class="login100-form-btn btn-primary" value=" Login">
                       
                    
                </div>

	 		</form>
	 		<span><a href="{{ url('forgetPassword') }}">Forget Password</a></span><br/><br/><br/>
	 		<span><a href="{{ url('userRegisterForm') }}"><h1>User Registration</h1></a></span>
	 		<h1 style="color:red;"> College Location:- </h1>
	 		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29212.258432833947!2d90.3910123847318!3d23.76405198458266!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c762c090421d%3A0x5bc36b1bf8e503c4!2sTejgaon+Adarsha+School+%26+College!5e0!3m2!1sen!2sbd!4v1547210280469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	 	</div>
	 </div>
	
</div>

@endsection