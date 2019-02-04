 					
@extends('master.layout')
@section('main_content')
	<div class="container" style=" min-height: 500px;">
		<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
 					@if(Session::has('message'))
                       <div class="alert alert-success">
                        {{ Session::get('message')}}
                    </div>
                    @endif 
        </div>
    </div>
 @endsection