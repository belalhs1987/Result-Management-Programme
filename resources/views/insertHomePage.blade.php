   
@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">

		<div class="row">
			<div class="col-md-12 text-right">
		    <a href="{{ url('logout') }}">Logout</a>
		    </div>
			
	    </div><br><br>
	    	 
	   			 <div class="row">
	    			<div class="col-md-6" align="center">
                      <a href="{{ url('homepage')}}"  style="box-shadow: 5px 5px black;" class="btn btn-success">Home</a>
                    </div>
                    <div class="col-md-6">
                      <a href="{{ url('viewHomePage')}}" style="box-shadow: 5px 5px black;" class="btn btn-success">View Result</a>
                    </div>
                       
                  </div> <br><br>
                  <div class="row">
              	<div class="col-md-12">
              		<h1 style="color:red; text-shadow: 5px 5px black;">Please select group to insert result</h1>
              	</div>
              </div> <br> 
	    <div class="row">
			<div class="col-md-4">
		    <a href="{{ url('huResultInsertForm') }}" style="box-shadow: 5px 5px black;" class="btn btn-success">Insert Humanities-Result</a>
		    </div>
			<div class="col-md-4">
		    <a href="{{ url('bsResultInsertForm')}}"  style="box-shadow: 5px 5px black;" class="btn btn-success">Insert Business-Result</a>
		    </div>
		    <div class="col-md-4">
		    <a href="{{ url('scResultInsertForm')}}" style="box-shadow: 5px 5px black;" class="btn btn-success">Insert Science-Result</a>
		    </div>
	    </div> 
	  
</div>
</div>
<script type="text/javascript" src="{{ asset('framework/myCustom/myCustom.js')}}"></script>
  @endsection
