 
 <!doctype html>

<html>
	<head> 
		<meta charset="UTF-8">
		<title> Mark-sheet </title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href=" ">
		<link rel="stylesheet" href="sweetAlart-min.css">
		
	</head>


	<body>
		<div class="container">
		 <div class="main-body" style="margin: 0 auto; width:80%; border: 1px; min-height: 500px; padding-right: 100px; " align="center" >

		 	<div class="row">
							<div class="col-md-12" align="center">
									Tejgaon Adarsha School & College <br/>
									HSC Test Exam.-2018  
									<h3><b> <u> Result Sheet  </u> </b></h3>  
							</div>
						</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-8">
											 			<!--table-->
					 <table class="table table-bordered table-striped table-hover">
                        <thead>
                           
                            <tr>
                                <th>bRoll</th>
                                <th>Name</th>
                                <th colspan="2">Bangla</th>
                                <th>English</th>
                                <th colspan="3">ICT</th>
                                <th colspan="2">S.Work</th>
                                <th colspan="2">History</th>
                                <th colspan="2">Civics</th>
                                <th colspan="2">Economics</th>
                                <th colspan="3">Agri</th>
                                <th>GPA-4th</th>
                                <th>GPA+4th</th>
                                <th>GP</th>

                            </tr>
                        </thead>
                        <tbody>
                        	<tr>
                        		<td>rol</td>
                        		<td>name</td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td></td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td>Prac</td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td>MCQ</td>
                        		<td>CQ</td>
                        		<td>Prac</td>
                        		<td>4</td>
                        		<td>4</td>
                        		<td>4</td>

                        	</tr>

                        	@foreach($hum_result as $hum_results)
                        	<tr>
                        		
                        		<td> {{ $hum_results->roll }} </td>
                        		<td>{{$hum_results->name}}</td>
                        		<td>{{$hum_results->bangla_mcq}}</td>
                        		<td>{{$hum_results->bangla_cq}}</td>
                        		<td>{{$hum_results->english}}</td>
                        		<td>{{$hum_results->ict_mcq}}</td>
                        		<td>{{$hum_results->ict_cq}}</td>
                        		<td>{{$hum_results->ict_prac}}</td>
                        		<td>{{$hum_results->s_work_mcq}}</td>
                        		<td>{{$hum_results->s_work_cq}}</td>
                        		<td>{{$hum_results->history_mcq}}</td>
                        		<td>{{$hum_results->history_cq}}</td>
                        		<td>{{$hum_results->civics_mcq}}</td>
                        		<td>{{$hum_results->civics_cq}}</td>
                        		<td>{{$hum_results->eco_mcq}}</td>
                        		<td>{{$hum_results->eco_cq}}</td>
                        		<td>{{$hum_results->agri_mcq}}</td>
                        		<td>{{$hum_results->agri_cq}}</td>
                        		<td>{{$hum_results->agri_prac}}</td>
                        		<td>{{$hum_results->name}}</td>
                        		<td>{{$hum_results->name}}</td>
                        		<td>{{$hum_results->name}}</td>

                        	</tr>
                          @endforeach 
                        </tbody>
                        
                    </table>
                    <div class="col-md-2">dsfasdf</div>

 
				</div>
			    
		</div>							
		 	
		 </div>
		 </div>
</body>
</html>