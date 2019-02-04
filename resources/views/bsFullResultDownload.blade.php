<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title> Mark-sheet </title>
		<!--<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/result_custom.css">-->
</head>
<body>
      
	 <div class="container">
		<div class="main_body">
			 
			<div class="result">
				<div class="row">
					<div class="col-md-12" align="center">
						Tejgaon Adarsha School & College <br/>
						HSC Half-Yearly Exam.-2018  
						<h4 style="color: red">Group: Business Studies</h4>
                        <h2><b> <u> Result Sheet  </u> </b></h2>   
					</div>
				</div>
				<div class="row">
				 
				<div class="col-md-12">
											 			<!--table-->
					 <table border="1px">
                        <thead>
                           
                            <tr align="center">
                                <th>Roll</th>
                                <th>Name</th>
                                <th colspan="4">Bangla</th>
                                <th colspan="2">English</th>
                                <th colspan="5">ICT</th>
                                <th colspan="4">Accounting</th>
                                <th colspan="4">Finance</th>
                                <th colspan="4">B.Org</th>
                                <th colspan="4">Economics</th>
                                <th colspan="5">Agri</th>
                                <th>GPA <br/> <span style="font-size: 12px">(Without 4th)</span> </th>
                                <th>GPA</th>
                                 
                                

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
                                <td></td>
                                <td></td>
                                 
                                 

                            </tr>

                            @foreach($bs_result as $bs_results)
                            <tr align="center">
                                
                                <td> {{ $bs_results->roll }} </td>
                                <td>{{$bs_results->name}}</td>
                                <td>{{$banMcq = $bs_results->bangla_mcq}}</td>
                                <td>{{$bancq = $bs_results->bangla_cq}}</td>
                               <td>{{$banTotal = $banMcq+$bancq}}</td>
                                <td>@if( $banTotal>0 && $banTotal<=32)
                                        <span style='color:red;'>{{ $banGp=0.00 }}</span>
                                         @elseif(($banMcq>0 && $banMcq<10) || ($bancq>0 && $bancq <23))
                                          <span style='color:red;'>{{ 0.00 }}</span>
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
                                <td>{{$engTotal = $bs_results->english}}</td>
                                <td>@if( $engTotal>0 && $engTotal<=32)
                                        <span style='color:red;'>{{$engGp= 0.00 }}</span>


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
                             
                                <td>{{$ictMCQ=$bs_results->ict_mcq}}</td>
                                <td>{{$ictCQ=$bs_results->ict_cq}}</td>
                                <td>{{$ictPrac=$bs_results->ict_prac}}</td>
                                <td>{{$ictTotal = $ictMCQ+$ictCQ+$ictPrac}}</td>
                                <td>@if( $ictTotal>0 && $ictTotal<=32)
                                        <span style='color:red;'>{{ 0.00 }}</span>
                                        @elseif(($ictMCQ>0 && $ictMCQ<=7) || ($ictCQ>0 && $ictCQ <=16)||($ictPrac>0 && $ictPrac<=7))
                                          <span style='color:red;'>{{ $ictGp=0.00 }}</span>

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
                                <td>{{$acc_mcq = $bs_results->acc_mcq}}</td>
                                <td>{{$acc_cq = $bs_results->acc_cq}}</td>
                               <td>{{$accTotal = $acc_mcq+$acc_cq}}</td>
                                <td>@if( $accTotal>0 && $accTotal<=32)
                                        <span style='color:red;'>{{ $accGp=0.00 }}</span>
                                        @elseif(($acc_mcq>0 && $acc_mcq<=9) || ($acc_cq>0 && $acc_cq <=22))
                                          <span style='color:red;'>{{ $accGp=0.00 }}</span>

                                        @elseif($accTotal>32 && $accTotal<=39)
                                        {{$accGp=1}}
                                         @elseif($accTotal>39 && $accTotal<=49)
                                        {{$accGp=2}}
                                         @elseif($accTotal>49 && $accTotal<=59)
                                        {{$accGp=3}}
                                         @elseif($accTotal>59 && $accTotal<=69)
                                        {{ $accGp=3.5 }}
                                         @elseif($accTotal>69 && $accTotal<=79)
                                        {{$accGp=4}}
                                         @elseif($accTotal>79 && $accTotal<=100)
                                        {{ $accGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{ $fin_mcq = $bs_results->fin_mcq}}</td>
                                <td>{{ $fin_cq = $bs_results->fin_cq}}</td>
                                <td>{{ $finTotal = $fin_mcq+$fin_cq}} </td>
                                <td>@if( $finTotal>0 && $finTotal<=32)
                                        <span style='color:red;'>{{ $finGp=0.00 }}</span>
                                         @elseif(($fin_mcq>0 && $fin_mcq<=9) || ($fin_cq>0 && $fin_cq <=22))
                                          <span style='color:red;'>{{ $finGp=0.00 }}</span>

                                        @elseif($finTotal>32 && $finTotal<=39)
                                        {{$finGp=1}}
                                         @elseif($finTotal>39 && $finTotal<=49)
                                        {{$finGp=2}}
                                         @elseif($finTotal>49 && $finTotal<=59)
                                        {{$finGp=3}}
                                         @elseif($finTotal>59 && $finTotal<=69)
                                        {{ $finGp=3.5 }}
                                         @elseif($finTotal>69 && $finTotal<=79)
                                        {{$finGp=4}}
                                         @elseif($finTotal>79 && $finTotal<=100)
                                        {{ $finGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$b_org_mcq = $bs_results->b_org_mcq}}</td>
                                <td>{{$b_org_cq = $bs_results->b_org_cq}}</td>
                                <td>{{$b_org_Total = $b_org_mcq+$b_org_cq}}</td>
                                <td>@if( $b_org_Total>0 && $b_org_Total<=32)
                                        <span style='color:red;'>{{ $b_org_Gp=0.00 }}</span>
                                         @elseif(($b_org_mcq>0 && $b_org_mcq<=7) || ($b_org_cq>0 && $b_org_cq <=16))
                                          <span style='color:red;'>{{ $b_org_Gp=0.00 }}</span>

                                        @elseif($b_org_Total>32 && $b_org_Total<=39)
                                        {{$b_org_Gp=1}}
                                         @elseif($b_org_Total>39 && $b_org_Total<=49)
                                        {{$b_org_Gp=2}}
                                         @elseif($b_org_Total>49 && $b_org_Total<=59)
                                        {{$b_org_Gp=3}}
                                         @elseif($b_org_Total>59 && $b_org_Total<=69)
                                        {{ $b_org_Gp=3.5 }}
                                         @elseif($b_org_Total>69 && $b_org_Total<=79)
                                        {{$b_org_Gp=4}}
                                         @elseif($b_org_Total>79 && $b_org_Total<=100)
                                        {{ $b_org_Gp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$eco_mcq=$bs_results->eco_mcq}}</td>
                                <td>{{$eco_cq=$bs_results->eco_cq}}</td>
                                <td>{{$eco_Total = $eco_mcq+$eco_cq}}</td>
                                <td>@if( $eco_Total>0 && $eco_Total<=32)
                                        <span style='color:red;'>{{ $b_otg_Gp=0.00 }}</span>
                                         @elseif(($eco_mcq>0 && $eco_mcq<9) || ($eco_cq>0 && $eco_cq <=22))
                                          <span style='color:red;'>{{ $b_otg_Gp=0.00 }}</span>

                                        @elseif($eco_Total>32 && $eco_Total<=39)
                                        {{$b_otg_Gp=1}}
                                         @elseif($eco_Total>39 && $eco_Total<=49)
                                        {{$b_otg_Gp=2}}
                                         @elseif($eco_Total>49 && $eco_Total<=59)
                                        {{$b_otg_Gp=3}}
                                         @elseif($eco_Total>59 && $eco_Total<=69)
                                        {{ $b_otg_Gp=3.5 }}
                                         @elseif($eco_Total>69 && $eco_Total<=79)
                                        {{$b_otg_Gp=4}}
                                         @elseif($eco_Total>79 && $eco_Total<=100)
                                        {{ $b_otg_Gp=5 }}
                                    
                                    @endif</td>
                                <td>{{$agri_mcq=$bs_results->agri_mcq}}</td>
                                <td>{{$agri_cq=$bs_results->agri_cq}}</td>
                                 <td>{{$agri_prac=$bs_results->agri_prac}}</td>
                                <td>{{$agriTotal = $agri_mcq+$agri_cq+$agri_prac}}</td>
                                <td>@if( $agriTotal>0 && $agriTotal<=32)
                                        <span style='color:red;'>{{ $agriGp=0.00 }}</span>
                                         @elseif(($agri_mcq>0 && $agri_mcq<=7) || ($agri_cq>0 && $agri_cq <=16))
                                          <span style='color:red;'>{{ $agriGp=0.00 }}</span>

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
                                <td>
                                   <?php
                                     if($banGp==0 || $engGp==0 ||$ictGp==0 || $accGp==0 || $finGp==0 || $b_org_Gp==0){
                                     $GPA_w_OP=0;
                                   echo "<p style='color:red;'>'0(F)'</p>";
                                        }
                                    else{
                                   $Gpa=($banGp +$engGp +$ictGp +$accGp +$finGp +$b_org_Gp)/6;
                                    $GPA_w_OP = sprintf ("%.2f", $Gpa);
                                     echo $GPA_w_OP ;
                                        }
                                    ?>

                                 </td>
                                 <td>
                                     
                                      <?php
                
                            
                            
                             
                                if($banGp==0 || $engGp==0 ||$ictGp==0 || $accGp==0 || $finGp==0 || $b_org_Gp==0)
                                  {
                                    $GPA=0;
                                echo "<p style='color:red;'>$GPA (F)</p>";
                                 }
                                else{
                                     if($agriGp>2){
                                        $optional=$agriGp-2;
                                           }else{$optional=0;}
                                $Gpa=($banGp +$engGp +$ictGp +$accGp +$finGp +$b_org_Gp+$optional)/6;
                                $GPA = sprintf ("%.2f", $Gpa);
                                echo $GPA;
                                        
                               }
                 
                    
                
                                 ?>
                                 </td>
                                 
                                 

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