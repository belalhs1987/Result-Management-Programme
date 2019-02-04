@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	 <div class="container-login100">
	 	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
	 		<h1 class="text-danger">User Registration</h1>
	 		<form method="post" action="{{ url('register')}}" class="login100-form validate-form">
	 		  {{ csrf_field() }}
	 			<div class="wrap-input100">
	 				@if($errors->has('username'))
	 					<div class="alert alert-danger">
	 						{{ $errors->first('username') }}
	 					</div>
	 					@endif
	 				<input type="text" name="username" class="wrap-input100 validate-input m-4" data-validate = "Enter username" placeholder="User Name" >
	 				<span class="focus-input100" data-placeholder="&#xe82a;">
	 					
	 				</span>
	 				
	 			</div>
	 			 <div class="wrap-input100 validate-input mb-4" data-validate="Enter password">	
                    <input class="input100" type="password" name="password" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="wrap-input100 validate-input mb-4" data-validate="Enter password">
                	@if($errors->has('password'))
	 					<div class="alert alert-danger">
	 						{{ $errors->first('password') }}
	 					</div>
	 					@endif
                    <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="wrap-input100 validate-input mb-4">
                	@if($errors->has('email'))
	 					<div class="alert alert-danger">
	 						{{ $errors->first('email') }}
	 					</div>
	 					@endif
                    <input class="input100" type="email" name="email" placeholder="Email">
                    <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                </div>
                <div class="container-login100-form-btn m-4">
                    <input type="submit" class="login100-form-btn btn-primary" value=" Submit">
                       
                    
                </div>
	 		</form>
	 		 
	 	</div>
	 </div>
	
</div>

@endsection