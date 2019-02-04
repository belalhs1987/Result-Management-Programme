<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title> Mark-sheet </title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/result_custom.css">
</head>
<body>
	 <div class="container">
		<div class="main_body">
			<div class="banner">
				<h1>Tejgaon Adarsha School & College</h1><br>
				<h2>Result Management Programme</h2>
			</div>
			<div class="mainMenu">
                
				
			</div>
            <div><br/>
                 <div class="col-md-4">
                <a href="{{ url('huFullResultdownload')}}" target="_blank" class="btn btn-success">Download Result</a>
                </div>
            </div>
                 @if(Session::has('message'))
                           <div class="alert alert-success">
                            {{ Session::get('message')}}
                         </div>
                     @endif <br>
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
			<div class="result">
				<div class="row">
					<div class="col-md-12" align="center">
						Tejgaon Adarsha School & College <br/>
						HSC Half-Yearly Exam.-2018  
						<h4 style="color: red">Group: Humanities</h4>
                        <h2><b> <u> Result Sheet  </u> </b></h2>  
					</div>
				</div>
				<div class="row">
				 
				<div class="col-md-12 result_table">
											 			<!--table-->
					 <table class="table table-bordered table-striped table-hover">
                        <thead>
                           
                            <tr align="center">
                                <th>Roll</th>
                                <th>Name</th>
                                <th colspan="4">Bangla</th>
                                <th colspan="2">English</th>
                                <th colspan="5">ICT</th>
                                <th colspan="4">S.Work</th>
                                <th colspan="4">History</th>
                                <th colspan="4">Civics</th>
                                <th colspan="4">Economics</th>
                                <th colspan="5">Agri</th>
                                <th>Optional Sub</th>
                                <th>GPA </th>
                                <th>GP</th>
                                <th colspan="3">ACTION</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr align="center">
                                <td>rol</td>
                                <td>name</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>4</td>
                                <td>4</td>
                                <td>4</td>
                                <td>EDIT</td>
                                <td>DEL</td>
                                <td>DOWN</td>

                            </tr>

                            @foreach($hum_result as $hum_results)
                            <tr align="center">
                                
                                <td> {{ $hum_results->roll }} </td>
                                <td>{{$hum_results->name}}</td>

                                <td>{{$banMcq = $hum_results->bangla_mcq}}</td>
                                <td>{{$bancq = $hum_results->bangla_cq}}</td>
                               <td>{{$banTotal = $banMcq+$bancq}}</td>
                                <td>@if( $banTotal>0 && $banTotal<=32)
                                        <h6 style='color:red;'>{{ $banGp=0.00 }}</h6>
                                         @elseif(($banMcq>0 && $banMcq<10) || ($bancq>0 && $bancq <23))
                                          <h6 style='color:red;'>{{ 0.00 }}</h6>
                                        @elseif($banTotal>32 && $banTotal<=39)
                                        {{$banGp=1}}
                                         @elseif($banTotal>39 && $banTotal<=49)
                                        {{$banGp=2}}
                                         @elseif($banTotal>49 && $banTotal<=59)
                                        {{$banGp=3}}
                                         @elseif($banTotal>59 && $banTotal<=69)
                                        {{ $banGp=3.5 }}
                                         @elseif($banTotal>69 && $banTotal<=79)
                                        {{$banGp=4}}
                                         @elseif($banTotal>79 && $banTotal<=100)
                                        {{ $banGp=5 }}
                                    
                                    @endif

                                </td>
                                <td>{{$engTotal = $hum_results->english}}</td>
                                <td>@if( $engTotal>0 && $engTotal<=32)
                                        <h6 style='color:red;'>{{$engGp= 0.00 }}</h6>


                                        @elseif($engTotal>32 && $engTotal<=39)
                                        {{$engGp=1}}
                                         @elseif($engTotal>39 && $engTotal<=49)
                                        {{$engGp=2}}
                                         @elseif($engTotal>49 && $engTotal<=59)
                                        {{$engGp=3}}
                                         @elseif($engTotal>59 && $engTotal<=69)
                                        {{ $engGp=3.5 }}
                                         @elseif($engTotal>69 && $engTotal<=79)
                                        {{$engGp=4}}
                                         @elseif($engTotal>79 && $engTotal<=100)
                                        {{ $engGp=5 }}
                                    
                                    @endif

                                </td>
                             
                                <td>{{$ictMCQ=$hum_results->ict_mcq}}</td>
                                <td>{{$ictCQ=$hum_results->ict_cq}}</td>
                                <td>{{$ictPrac=$hum_results->ict_prac}}</td>
                                <td>{{$ictTotal = $ictMCQ+$ictCQ+$ictPrac}}</td>
                                <td>@if( $ictTotal>0 && $ictTotal<=32)
                                        <h6 style='color:red;'>{{ 0.00 }}</h6>
                                        @elseif(($ictMCQ>0 && $ictMCQ<8) || ($ictCQ>0 && $ictCQ <=16)||($ictPrac>0 && $ictPrac<8))
                                          <h6 style='color:red;'>{{ $ictGp=0.00 }}</h6>

                                        @elseif($ictTotal>32 && $ictTotal<=39)
                                        {{$ictGp=1}}
                                         @elseif($ictTotal>39 && $ictTotal<=49)
                                        {{$ictGp=2}}
                                         @elseif($ictTotal>49 && $ictTotal<=59)
                                        {{$ictGp=3}}
                                         @elseif($ictTotal>59 && $ictTotal<=69)
                                        {{ $ictGp=3.5 }}
                                         @elseif($ictTotal>69 && $ictTotal<=79)
                                        {{$ictGp=4}}
                                         @elseif($ictTotal>79 && $ictTotal<=100)
                                        {{$ictGp= 5 }}
                                    
                                    @endif</td>
                                <td>{{$workMcq = $hum_results->s_work_mcq}}</td>
                                <td>{{$workCq = $hum_results->s_work_cq}}</td>
                               <td>{{$workTotal = $workMcq+$workCq}}</td>
                                <td>@if( $workTotal>0 && $workTotal<=32)
                                        <h6 style='color:red;'>{{ 0.00 }}</h6>
                                        @elseif(($workMcq>0 && $workMcq<10) || ($workCq>0 && $workCq <=22))
                                          <h6 style='color:red;'>{{ $workGp=0.00 }}</h6>

                                        @elseif($workTotal>32 && $workTotal<=39)
                                        {{$workGp=$workGp=1}}
                                         @elseif($workTotal>39 && $workTotal<=49)
                                        {{$workGp=2}}
                                         @elseif($workTotal>49 && $workTotal<=59)
                                        {{$workGp=3}}
                                         @elseif($workTotal>59 && $workTotal<=69)
                                        {{ $workGp=3.5 }}
                                         @elseif($workTotal>69 && $workTotal<=79)
                                        {{$workGp=4}}
                                         @elseif($workTotal>79 && $workTotal<=100)
                                        {{ $workGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{ $hisMcq = $hum_results->history_mcq}}</td>
                                <td>{{ $hisCq = $hum_results->history_cq}}</td>
                                <td>{{ $hisTotal = $hisMcq+$hisCq}} </td>
                                <td>@if( $hisTotal>0 && $hisTotal<=32)
                                        <h6 style='color:red;'>{{ 0.00 }}</h6>
                                         @elseif(($hisMcq>0 && $hisMcq<10) || ($hisCq>0 && $hisCq <=22))
                                          <h6 style='color:red;'>{{ $hisGp=0.00 }}</h6>

                                        @elseif($hisTotal>32 && $hisTotal<=39)
                                        {{$hisGp=1}}
                                         @elseif($hisTotal>39 && $hisTotal<=49)
                                        {{$hisGp=2}}
                                         @elseif($hisTotal>49 && $hisTotal<=59)
                                        {{$hisGp=3}}
                                         @elseif($hisTotal>59 && $hisTotal<=69)
                                        {{ $hisGp=3.5 }}
                                         @elseif($hisTotal>69 && $hisTotal<=79)
                                        {{$hisGp=4}}
                                         @elseif($hisTotal>79 && $hisTotal<=100)
                                        {{ $hisGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$civMcq = $hum_results->civics_mcq}}</td>
                                <td>{{$civCq = $hum_results->civics_cq}}</td>
                                <td>{{$civTotal = $civMcq+$civCq}}</td>
                                <td>@if( $civTotal>0 && $civTotal<=32)
                                        <h6 style='color:red;'>{{ 0.00 }}</h6>
                                         @elseif(($civMcq>0 && $civMcq<10) || ($civCq>0 && $civCq <=22))
                                          <h6 style='color:red;'>{{ $civGp=0.00 }}</h6>

                                        @elseif($civTotal>32 && $civTotal<=39)
                                        {{$civGp=1}}
                                         @elseif($civTotal>39 && $civTotal<=49)
                                        {{$civGp=2}}
                                         @elseif($civTotal>49 && $civTotal<=59)
                                        {{$civGp=3}}
                                         @elseif($civTotal>59 && $civTotal<=69)
                                        {{ $civGp=3.5 }}
                                         @elseif($civTotal>69 && $civTotal<=79)
                                        {{$civGp=4}}
                                         @elseif($civTotal>79 && $civTotal<=100)
                                        {{ $civGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$eco_mcq=$hum_results->eco_mcq}}</td>
                                <td>{{$eco_cq=$hum_results->eco_cq}}</td>
                                <td>{{$ecoTotal = $eco_mcq+$eco_cq}}</td>
                                <td>@if( $ecoTotal>0 && $ecoTotal<=32)
                                        <h6 style='color:red;'>{{ $ecoGp=0.00 }}</h6>
                                         @elseif(($eco_mcq>0 && $eco_mcq<10) || ($eco_cq>0 && $eco_cq <=22))
                                          <h6 style='color:red;'>{{ $ecoGp=0.00 }}</h6>

                                        @elseif($ecoTotal>32 && $ecoTotal<=39)
                                        {{$ecoGp=1}}
                                         @elseif($ecoTotal>39 && $ecoTotal<=49)
                                        {{$ecoGp=2}}
                                         @elseif($ecoTotal>49 && $ecoTotal<=59)
                                        {{$ecoGp=3}}
                                         @elseif($ecoTotal>59 && $ecoTotal<=69)
                                        {{ $ecoGp=3.5 }}
                                         @elseif($ecoTotal>69 && $ecoTotal<=79)
                                        {{$ecoGp=4}}
                                         @elseif($ecoTotal>79 && $ecoTotal<=100)
                                        {{ $ecoGp=5 }}
                                    
                                    @endif</td>
                                <td>{{$agri_mcq=$hum_results->agri_mcq}}</td>
                                <td>{{$agri_cq=$hum_results->agri_cq}}</td>
                                <td>{{$agri_prac=$hum_results->agri_prac}}</td>
                                <td>{{$agriTotal = $agri_mcq+$agri_cq+$agri_prac}}</td>
                                <td>@if( $agriTotal>0 && $agriTotal<=32)
                                        <h6 style='color:red;'>{{ $agriGp=0.00 }}</h6>
                                         @elseif(($agri_mcq>0 && $agri_mcq<=7) || ($agri_cq>0 && $agri_cq <=16))
                                          <h6 style='color:red;'>{{ $agriGp=0.00 }}</h6>

                                        @elseif($agriTotal>32 && $agriTotal<=39)
                                        {{$agriGp=1}}
                                         @elseif($agriTotal>39 && $agriTotal<=49)
                                        {{$agriGp=2}}
                                         @elseif($agriTotal>49 && $agriTotal<=59)
                                        {{$agriGp=3}}
                                         @elseif($agriTotal>59 && $agriTotal<=69)
                                        {{ $agriGp=3.5 }}
                                         @elseif($agriTotal>69 && $agriTotal<=79)
                                        {{$agriGp=4}}
                                         @elseif($agriTotal>79 && $agriTotal<=100)
                                        {{ $agriGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$optional_sub=$hum_results->optional_sub}}</td>
                                <td>
                                     <?php
                                     
                                     if($banGp==0 || $engGp==0 ||$ictGp==0 || $civGp==0 || $hisGp==0 ||$ecoGp=0){
                                     $GPA_w_OP=0;
                                   echo "<p style='color:red;'>'0(F)'</p>";
                                        }
                                    
                                    
                                    ?>
                                </td>
                                <td>{{ $hum_results->roll}}</td>
                                 <td> <a href="{{ url('huEditResult/'.$hum_results->roll)}}" class="btn btn-primary"> Edit</a></td>
                                <td><a href="{{ url('resultCardDownload/'.$hum_results->roll)}}" class="btn btn-success" >Download</a></td>
                                <td><a href="{{ url('deleteResult/'.$hum_results->roll)}}" class="btn btn-danger">Delete</a></td>

                            </tr>
                          @endforeach 
                        </tbody>
                        
                    </table>
                    

 
				</div>
			    
		</div>



			</div>
			 
		</div>
	 
    </div>
</body>
</html>