   
@extends('master.layout')
@section('main_content')

<div class="container" style=" min-height: 500px;">
	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
					 @if(Session::has('message'))
	                       <div class="alert alert-success">
	                        {{ Session::get('message')}}
	                   	 </div>
                   	 @endif  
		 <form action="{{ url('bsUpdateForm')}}" method="post" enctype="multipart/form-data">
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
								   	 @foreach($bs_result as $bs_results)
								   	  <div class="form-group col-md-4">
                                                <label>Roll  </label>
                                                <input class="form-control" name="roll" value="{{$bs_results->roll}}">
                                                <input class="form-control" type="hidden" name="old_roll"  pattern="[0-9]{0,10}" value="{{$bs_results->roll}}">
                                          </div> 
									     <div class="form-group col-md-8">
                                                <label>Student's Name  </label>
                                                <input type="text" class="form-control" name="name" value="{{$bs_results->name}}" >
                                          </div> 
									    
                                          <div class="form-group col-md-6">
                                                <label> Bangla MCQ  </label>
                                                <input class="form-control" name="bangla_mcq"   pattern="[0-9]{0,10}" value="{{$bs_results->bangla_mcq}}">
                                          </div> 
                                          <div class="form-group col-md-6">
                                                <label> Bangla CQ   </label>
                                                <input class="form-control" name="bangla_cq"   pattern="[0-9]{0,10}" value="{{$bs_results->bangla_cq}}">
                                          </div> 
                                          
										  <div class="form-group col-md-6">
                                                <label>English  </label>
                                                <input class="form-control" name="english"   pattern="[0-9]{0,10}" value="{{$bs_results->english}}">
                                            </div>
											<div class="form-group col-md-6">
                                                <label>ICT MCQ </label>
                                                <input class="form-control" name="ict_mcq"   pattern="[0-9]{0,10}" value="{{$bs_results->ict_mcq}}">
                                            </div> 
                                            <div class="form-group col-md-6">
                                                <label>ICT CQ</label>
                                                <input class="form-control" name="ict_cq"   pattern="[0-9]{0,10}" value="{{$bs_results->ict_cq}}">
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <label>ICT Prac.</label>
                                                <input class="form-control" name="ict_prac" pattern="[0-9]{0,10}" value="{{$bs_results->ict_prac}}">
                                            </div> 

                                             <div class="form-group col-md-6">
                                                <label>Acc MCQ </label>
                                                <input class="form-control" name="acc_mcq"   pattern="[0-9]{0,10}" value="{{$bs_results->acc_mcq}}">
                                             </div>
                                               <div class="form-group col-md-6">
                                                <label>Acc CQ </label>
                                                <input class="form-control" name="acc_cq"   pattern="[0-9]{0,10}" value="{{$bs_results->acc_cq}}">
                                              </div> 
  
											  <div class="form-group col-md-6">
                                                <label>Finance MCQ  </label>
                                                <input class="form-control" name="fin_mcq"   pattern="[0-9]{0,10}" value="{{$bs_results->fin_mcq}}">
                                              </div> 
                                              <div class="form-group col-md-6">
                                                <label>Finance CQ  </label>
                                                <input class="form-control" name="fin_cq"   pattern="[0-9]{0,10}" value="{{$bs_results->fin_cq}}">
                                              </div>
                                               

											 
											  <div class="form-group col-md-6">
                                                <label>B. Org MCQ </label>
                                                <input class="form-control" name="b_org_mcq"   pattern="[0-9]{0,10}" value="{{$bs_results->b_org_mcq}}">
                                              </div> 
                                              <div class="form-group col-md-6">
                                                <label>B. Org CQ  </label>
                                                <input class="form-control" name="b_org_cq"   pattern="[0-9]{0,10}" value="{{$bs_results->b_org_cq}}">
                                              </div> 
											  
											                     
                                             
											  <div class="form-group col-md-4">
                                                <label>Agri MCQ </label>
                                                <input class="form-control" name="agri_mcq"   pattern="[0-9]{0,10}" value="{{$bs_results->agri_mcq}}">
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label>Agri CQ</label>
                                                <input class="form-control" name="agri_cq"   pattern="[0-9]{0,10}" value="{{$bs_results->agri_cq}}">
                                            </div> 
                                            
                                             <div class="form-group col-md-4">
                                                <label>Agri 1st Prac </label>
                                                <input class="form-control" name="agri_prac"   pattern="[0-9]{0,10}" value="{{$bs_results->agri_prac}}">
                                            </div>
                                            <div class="form-group col-md-12">
                                              <label>Select Optional Sub: </label>
                                              <select name="optional_sub">

                                                <option value="109" 
                                                	@if($bs_results->optional_sub=109)
                                                	{{"selected"}}
                                                	@endif
                                                >Economics</option>
                                                <option value="239" 
                                                	@if($bs_results->optional_sub=239)
                                                	{{"selected"}}
                                                	@endif
                                                >Agriculture</option>
                                                 
                                              </select>
                                            </div> 
                                            @endforeach
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
