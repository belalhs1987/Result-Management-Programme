   
@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
					 @if(Session::has('message'))
	                       <div class="alert alert-success">
	                        {{ Session::get('message')}}
	                   	 </div>
                   	 @endif 

                     <div class="row">
                        <div class="col-md-4" align="center">
                          <a href="{{ url('homepage')}}"  style="box-shadow: 5px 5px black;" class="btn btn-success">Home</a>
                        </div>
                        <div class="col-md-4">
                          <a href="{{ url('insertHomePage')}}"  style="box-shadow: 5px 5px black;" class="btn btn-success">Insert Result</a>
                        </div>
                        <div class="col-md-4">
                          <a href="{{ url('viewHomePage')}}"  style="box-shadow: 5px 5px black;" class="btn btn-success">View Result</a>
                        </div>
                       
                 </div> <br><br>
                 
		 <form action="{{ url('bsInsertMarks')}}" method="post" enctype="multipart/form-data">
		 	{{ csrf_field()}}
							<div class="div margin10">
							 <div class="margin10">
                 
              								<div class="panel panel-success" >
											<div class="panel-heading">
                        <h2 align="center" style="color:red;">Group: Business Studies</h2>
											   <h3 align="center">Insert Student-details & Marks</h3>
										   </div><br/>
								   <div class="panel-body">
								   	<div class="row">
								   	 
								   	  <div class="form-group col-md-4">
                                                <label>Roll  </label>
                                                <input class="form-control" name="roll"  pattern="[0-9]{0,10}">
                                          </div> 
									     <div class="form-group col-md-8">
                                                <label>Student's Name  </label>
                                                <input type="text" class="form-control" name="name"  >
                                          </div> 
									    
                                          <div class="form-group col-md-6">
                                                <label> Bangla MCQ  </label>
                                                <input class="form-control" name="bangla_mcq"   pattern="[0-9]{0,10}">
                                          </div> 
                                          <div class="form-group col-md-6">
                                                <label> Bangla CQ   </label>
                                                <input class="form-control" name="bangla_cq"   pattern="[0-9]{0,10}">
                                          </div> 
                                          
										  <div class="form-group col-md-6">
                                                <label>English  </label>
                                                <input class="form-control" name="english"   pattern="[0-9]{0,10}">
                                            </div>
											<div class="form-group col-md-6">
                                                <label>ICT MCQ </label>
                                                <input class="form-control" name="ict_mcq"   pattern="[0-9]{0,10}">
                                            </div> 
                                            <div class="form-group col-md-6">
                                                <label>ICT CQ</label>
                                                <input class="form-control" name="ict_cq"   pattern="[0-9]{0,10}">
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <label>ICT Prac.</label>
                                                <input class="form-control" name="ict_prac"   pattern="[0-9]{0,10}">
                                            </div> 

                                             <div class="form-group col-md-6">
                                                <label>Acc MCQ </label>
                                                <input class="form-control" name="acc_mcq"   pattern="[0-9]{0,10}">
                                             </div>
                                               <div class="form-group col-md-6">
                                                <label>Acc CQ </label>
                                                <input class="form-control" name="acc_cq"   pattern="[0-9]{0,10}">
                                              </div> 
  
											  <div class="form-group col-md-6">
                                                <label>Finance MCQ  </label>
                                                <input class="form-control" name="fin_mcq"   pattern="[0-9]{0,10}">
                                              </div> 
                                              <div class="form-group col-md-6">
                                                <label>Finance CQ  </label>
                                                <input class="form-control" name="fin_cq"   pattern="[0-9]{0,10}">
                                              </div>
                                               

											 
											  <div class="form-group col-md-6">
                                                <label>B. Org MCQ </label>
                                                <input class="form-control" name="b_org_mcq"   pattern="[0-9]{0,10}">
                                              </div> 
                                              <div class="form-group col-md-6">
                                                <label>B. Org CQ  </label>
                                                <input class="form-control" name="b_org_cq"   pattern="[0-9]{0,10}">
                                              </div> 
											  
											                     
                                             
											  <div class="form-group col-md-4">
                                                <label>Agri MCQ </label>
                                                <input class="form-control" name="agri_mcq"   pattern="[0-9]{0,10}">
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label>Agri CQ</label>
                                                <input class="form-control" name="agri_cq"   pattern="[0-9]{0,10}">
                                            </div> 
                                            
                                             <div class="form-group col-md-4">
                                                <label>Agri 1st Prac </label>
                                                <input class="form-control" name="agri_prac"   pattern="[0-9]{0,10}">
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label>Select Optional Sub: </label>
                                              <select name="optional_sub">

                                                <option value="109">Economics</option>
                                                <option value="239">Agriculture</option>
                                                 
                                              </select>
                                            </div> 
                                             <div class="form-group col-md-12">
                                                 
                                               			<button type="submit" class="btn btn-primary" name="submit">
														<i class="glyphicon glyphicon-plus">
														</i> Submit</button>
                                            </div> 
                                            
										  <div class="form-group row">
											  	 
											  	<div class="col-md-12" align="center">
											  			
												</div>
											  
										  </div>
										</div>
									</div>	  
								</div>
							 </div>
							</div>
						</form>
							
	</div>
</div>
<script type="text/javascript" src="{{ asset('framework/myCustom/myCustom.js')}}"></script>
  @endsection
