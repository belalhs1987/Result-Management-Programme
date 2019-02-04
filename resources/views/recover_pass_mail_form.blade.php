   
@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
  <h1 class="text-danger">Recovery Password Email Form</h1>
  <form action="{{ url('updatePassword')}}" method="post">
  	{{ csrf_field() }}
  	<input type="hidden" value="{{ $userId }}" name="userId">
  						@if($errors->has('password'))
	 					<div class="alert alert-danger">
	 						{{ $errors->first('password') }}
	 					</div>
	 					@endif
  	Type New Password: <input type="Password" name="password"><br><br>
  							@if($errors->has('password_confirmation'))
		 					<div class="alert alert-danger">
		 						{{ $errors->first('password_confirmation') }}
		 					</div>
		 					@endif
  	Retype Password: <input type="Password" name="password_confirmation"><br><br>
  	<input type="submit" value="Submit">
  </form>
</div>
</div>
  @endsection