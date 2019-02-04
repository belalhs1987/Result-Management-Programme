   
@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
		<div class="row">
			<div class="col-md-8 text-right text-danger">
			 
			</div>
			<div class="col-md-4">
		    <a href="{{ url('logout') }}">Logout</a>
		    </div>
	    </div> <br> <br>
	    <div class="row">
			<div class="col-md-6">
		    <a href="{{ url('insertHomePage') }}" target="_blank" class="btn btn-success">Insert Result</a>
		    </div>
			<div class="col-md-6">
		    <a href="{{ url('viewHomePage')}}" target="_blank" class="btn btn-success">View Result</a>
		    </div>
		     
	    </div> 
	  
</div>
</div>
<script type="text/javascript" src="{{ asset('framework/myCustom/myCustom.js')}}"></script>
  @endsection
