    
@extends('master.layout')
@section('main_content')
<div class="container" style=" min-height: 500px;">
	<div class="wrap-login100  p-t-30 p-b-50 text-center m-4">
					 @if(Session::has('message'))
	                       <div class="alert alert-success">
	                        <h2>{{ Session::get('message')}}</h2>
	                   	 </div>
                   	 @endif 
                      <div class="row">
                        <div class="col-md-4" align="center">
                          <a href="{{ url('homepage')}}"  style="box-shadow: 5px 5px black;" class="btn btn-success">Home</a>
                        </div>
                        <div class="col-md-4">
                          <a href="{{ url('insertHomePage')}}" style="box-shadow: 5px 5px black;" class="btn btn-success">Insert Result</a>
                        </div>
                        <div class="col-md-4">
                          <a href="{{ url('viewHomePage')}}" style="box-shadow: 5px 5px black;" class="btn btn-success">View Result</a>
                        </div>
                       
                 </div> <br><br>
		 <form action="{{ url('scUpdateForm')}}" method="post" enctype="multipart/form-data">
		 	{{ csrf_field()}}
							<div class="div margin10">
							 <div class="margin10">
								<div class="panel panel-success" >
											<div class="panel-heading">
                        <h2 align="center" style="color:red;">Group: Science</h2>
                         <h3 align="center">Insert Student-details & Marks</h3>
                       </div><br/>
								   <div class="panel-body">
								   	<div class="row">
								   	  @foreach($sc_result as $sc_results)
								   	  <div class="form-group col-md-4">
                                                <label>Roll  </label>
                                                <input class="form-control" name="roll"  pattern="[0-9]{0,10}" value="{{$sc_results->roll}}">
                                                <input type="hidden" name="old_roll"   value="{{$sc_results->roll}}">
                                          </div> 
									     <div class="form-group col-md-8">
                                                <label>Student's Name  </label>
                                                <input type="text" class="form-control" name="name" value="{{$sc_results->name}}">
                                          </div> 
									    
                                          <div class="form-group col-md-6">
                                                <label> Bangla MCQ  </label>
                                                <input class="form-control" name="bangla_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->bangla_mcq}}">
                                          </div> 
                                          <div class="form-group col-md-6">
                                                <label> Bangla CQ   </label>
                                                <input class="form-control" name="bangla_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->bangla_cq}}">
                                          </div> 
                                          
										  <div class="form-group col-md-6">
                                                <label>English  </label>
                                                <input class="form-control" name="english"   pattern="[0-9]{0,10}" value="{{$sc_results->english}}">
                                            </div>
											<div class="form-group col-md-6">
                                                <label>ICT MCQ </label>
                                                <input class="form-control" name="ict_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->ict_mcq}}">
                                            </div> 
                                            <div class="form-group col-md-6">
                                                <label>ICT CQ</label>
                                                <input class="form-control" name="ict_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->ict_cq}}">
                                            </div>  
                                            <div class="form-group col-md-6">
                                                <label>ICT Prac.</label>
                                                <input class="form-control" name="ict_prac"   pattern="[0-9]{0,10}" value="{{$sc_results->ict_prac}}">
                                            </div> 

                        <div class="form-group col-md-4">
                                                <label>Chemistry MCQ </label>
                                                <input class="form-control" name="chem_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->chem_mcq}}">
                                             </div>
                                               <div class="form-group col-md-4">
                                                <label>Chemistry CQ </label>
                                                <input class="form-control" name="chem_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->chem_cq}}">
                                              </div> 
                                              <div class="form-group col-md-4">
                                                <label>Chemistry Prac.</label>
                                                <input class="form-control" name="chem_prac"   pattern="[0-9]{0,10}" value="{{$sc_results->chem_prac}}">
                                            </div> 
  
											  <div class="form-group col-md-4">
                                                <label>Physics MCQ  </label>
                                                <input class="form-control" name="phy_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->phy_mcq}}">
                                              </div> 
                                              <div class="form-group col-md-4">
                                                <label>Physics CQ  </label>
                                                <input class="form-control" name="phy_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->phy_cq}}">
                                              </div>
                                              <div class="form-group col-md-4">
                                                <label>Physics Prac.</label>
                                                <input class="form-control" name="phy_prac"   pattern="[0-9]{0,10}" value="{{$sc_results->phy_prac}}">
                                            </div> 
                                               

											 
											  <div class="form-group col-md-4">
                                                <label>Biology MCQ </label>
                                                <input class="form-control" name="bio_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->bio_mcq}}">
                                              </div> 
                                              <div class="form-group col-md-4">
                                                <label>Biology CQ  </label>
                                                <input class="form-control" name="bio_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->bio_cq}}">
                                              </div> 
                                              <div class="form-group col-md-4">
                                                <label>Biology Prac.</label>
                                                <input class="form-control" name="bio_prac"   pattern="[0-9]{0,10}" value="{{$sc_results->bio_prac}}">
                                            </div> 
                          <div class="form-group col-md-4">
                                                <label>Math MCQ </label>
                                                <input class="form-control" name="math_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->math_mcq}}">
                                              </div> 
                                              <div class="form-group col-md-4">
                                                <label>Math CQ  </label>
                                                <input class="form-control" name="math_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->math_cq}}">
                                              </div> 
                                              <div class="form-group col-md-4">
                                                <label>Math Prac.</label>
                                                <input class="form-control" name="math_prac"   pattern="[0-9]{0,10}" value="{{$sc_results->math_prac}}">
                                            </div> 
											  
											  
                                             
											  <div class="form-group col-md-4">
                                                <label>Agri MCQ </label>
                                                <input class="form-control" name="agri_mcq"   pattern="[0-9]{0,10}" value="{{$sc_results->agri_mcq}}">
                                            </div> 
                                            <div class="form-group col-md-4">
                                                <label>Agri CQ</label>
                                                <input class="form-control" name="agri_cq"   pattern="[0-9]{0,10}" value="{{$sc_results->agri_cq}}">
                                            </div> 
                                            
                                             <div class="form-group col-md-4">
                                                <label>Agri Prac </label>
                                                <input class="form-control" name="agri_prac"   pattern="[0-9]{0,10}" value="{{$sc_results->agri_prac}}">
                                            </div>
                            <div class="form-group col-md-12">
                                              <label>Select Optional Sub: </label>
                                              <select name="optional_sub">             
                                                <option value="239">Agriculture</option>
                                                <option value="178">Biology</option>
                                                 <option value="127">Math</option>
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
