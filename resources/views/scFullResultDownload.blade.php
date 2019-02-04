<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
		<title> Mark-sheet </title>
		 
</head>
<body>
     
	 <div class="container">
		<div class="main_body">
			
                 
			<div class="result">
				<div class="row">
					<div class="col-md-12" align="center">
						Tejgaon Adarsha School & College <br/>
						HSC Half-Yearly Exam.-2018  
                        <h4 style="color: red">Group: Science</h4>
						<h2><b> <u> Result Sheet  </u> </b></h2>  
					</div>
				</div>
				<div class="row">
				 
				<div class="col-md-12 result_table">
											 			<!--table-->
					 <table border="1px">
                        <thead>
                           
                            <tr align="center">
                                <th>Roll</th>
                                <th>Name</th>
                                <th colspan="4">Bangla</th>
                                <th colspan="2">English</th>
                                <th colspan="5">ICT</th>
                                <th colspan="5">Chrmistry</th>
                                <th colspan="5">Physics</th>
                                <th colspan="5">Biology</th>
                                <th colspan="5">Math</th>
                                <th colspan="5">Agri</th>
                                <th>GPA </th>
                                
                                 
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
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>MCQ</td>
                                <td>CQ</td>
                                <td>Prac</td>
                                <td>Total</td>
                                <td>GP</td>
                                <td>GPA</td>
                                 
                                 
                                

                            </tr>

                            @foreach($sc_result as $sc_results)
                            <tr align="center">
                                
                                <td> {{ $sc_results->roll }} </td>
                                <td>{{$sc_results->name}}</td>

                                <td>{{$banMcq = $sc_results->bangla_mcq}}</td>
                                <td>{{$bancq = $sc_results->bangla_cq}}</td>
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
                                <td>{{$engTotal = $sc_results->english}}</td>
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
                             
                                <td>{{$ictMCQ=$sc_results->ict_mcq}}</td>
                                <td>{{$ictCQ=$sc_results->ict_cq}}</td>
                                <td>{{$ictPrac=$sc_results->ict_prac}}</td>
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
                                <td>{{$chem_mcq = $sc_results->chem_mcq}}</td>
                                <td>{{$chem_cq = $sc_results->chem_cq}}</td>
                                <td>{{$chem_prac=$sc_results->chem_prac}}</td>
                               <td>{{$chemTotal = $chem_mcq+$chem_cq}}</td>
                                <td>@if( $chemTotal>0 && $chemTotal<=32)
                                        <span style='color:red;'>{{ $chemGp=0.00 }}</span>
                                        @elseif(($chem_mcq>0 && $chem_mcq<=7) || ($chem_cq>0 && $chem_cq <=16)||($chem_prac>0 && $chem_prac<=7))
                                          <span style='color:red;'>{{ $chemGp=0.00 }}</span>

                                        @elseif($chemTotal>32 && $chemTotal<=39)
                                        {{$chemGp=1}}
                                         @elseif($chemTotal>39 && $chemTotal<=49)
                                        {{$chemGp=2}}
                                         @elseif($chemTotal>49 && $chemTotal<=59)
                                        {{$chemGp=3}}
                                         @elseif($chemTotal>59 && $chemTotal<=69)
                                        {{ $chemGp=3.5 }}
                                         @elseif($chemTotal>69 && $chemTotal<=79)
                                        {{$chemGp=4}}
                                         @elseif($chemTotal>79 && $chemTotal<=100)
                                        {{ $chemGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{ $phy_mcq = $sc_results->phy_mcq}}</td>
                                <td>{{ $phy_cq = $sc_results->phy_cq}}</td>
                                <td>{{$phy_prac=$sc_results->phy_prac}}</td>
                                <td>{{ $phyTotal = $phy_mcq+$phy_cq}} </td>
                                <td>@if( $phyTotal>0 && $phyTotal<=32)
                                        <span style='color:red;'>{{ $phyGp=0.00 }}</span>
                                         @elseif(($phy_mcq>0 && $phy_mcq<=7) || ($phy_cq>0 && $phy_cq <=16)||($phy_prac>0 && $phy_prac<=7))
                                          <span style='color:red;'>{{ $phyGp=0.00 }}</span>

                                        @elseif($phyTotal>32 && $phyTotal<=39)
                                        {{$phyGp=1}}
                                         @elseif($phyTotal>39 && $phyTotal<=49)
                                        {{$phyGp=2}}
                                         @elseif($phyTotal>49 && $phyTotal<=59)
                                        {{$phyGp=3}}
                                         @elseif($phyTotal>59 && $phyTotal<=69)
                                        {{ $phyGp=3.5 }}
                                         @elseif($phyTotal>69 && $phyTotal<=79)
                                        {{$phyGp=4}}
                                         @elseif($phyTotal>79 && $phyTotal<=100)
                                        {{ $phyGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$bio_mcq = $sc_results->bio_mcq}}</td>
                                <td>{{$bio_cq = $sc_results->bio_cq}}</td>
                                <td>{{$bio_prac=$sc_results->bio_prac}}</td>
                                <td>{{$bioTotal = $bio_mcq+$bio_cq}}</td>
                                <td>@if( $bioTotal>0 && $bioTotal<=32)
                                        <span style='color:red;'>{{ $bioGp=0.00 }}</span>
                                         @elseif(($bio_mcq>0 && $bio_mcq<=7) || ($bio_cq>0 && $bio_cq <=16)||($bio_prac>0 && $bio_prac<=7))
                                          <span style='color:red;'>{{ $bioGp=0.00 }}</span>

                                        @elseif($bioTotal>32 && $bioTotal<=39)
                                        {{$bioGp=1}}
                                         @elseif($bioTotal>39 && $bioTotal<=49)
                                        {{$bioGp=2}}
                                         @elseif($bioTotal>49 && $bioTotal<=59)
                                        {{$bioGp=3}}
                                         @elseif($bioTotal>59 && $bioTotal<=69)
                                        {{ $bioGp=3.5 }}
                                         @elseif($bioTotal>69 && $bioTotal<=79)
                                        {{$bioGp=4}}
                                         @elseif($bioTotal>79 && $bioTotal<=100)
                                        {{ $bioGp=5 }}
                                    
                                    @endif
                                </td>
                                <td>{{$math_mcq=$sc_results->math_mcq}}</td>
                                <td>{{$math_cq=$sc_results->math_cq}}</td>
                                <td>{{$math_prac=$sc_results->math_prac}}</td>
                                <td>{{$mathTotal = $math_mcq+$math_cq}}</td>
                                <td>@if( $mathTotal>0 && $mathTotal<=32)
                                        <span style='color:red;'>{{ $mathGp=0.00 }}</span>
                                         @elseif(($math_mcq>0 && $math_mcq<7) || ($math_cq>0 && $math_cq <=22)||($math_prac>0 && $math_prac<=7))
                                          <span style='color:red;'>{{ $mathGp=0.00 }}</span>

                                        @elseif($mathTotal>32 && $mathTotal<=39)
                                        {{$mathGp=1}}
                                         @elseif($mathTotal>39 && $mathTotal<=49)
                                        {{$mathGp=2}}
                                         @elseif($mathTotal>49 && $mathTotal<=59)
                                        {{$mathGp=3}}
                                         @elseif($mathTotal>59 && $mathTotal<=69)
                                        {{ $mathGp=3.5 }}
                                         @elseif($mathTotal>69 && $mathTotal<=79)
                                        {{$mathGp=4}}
                                         @elseif($mathTotal>79 && $mathTotal<=100)
                                        {{ $mathGp=5 }}
                                    
                                    @endif</td>
                                <td>{{$agri_mcq=$sc_results->agri_mcq}}</td>
                                <td>{{$agri_cq=$sc_results->agri_cq}}</td>
                                <td>{{$agri_prac=$sc_results->agri_prac}}</td>
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
                                     if($banGp==0 || $engGp==0 ||$ictGp==0 || $chemGp==0 || $phyGp==0 || $bioGp==0){
                                     $GPA_w_OP=0;
                                   echo "<p style='color:red;'>'0(F)'</p>";
                                        }
                                    else{
                                   $Gpa=($banGp +$engGp +$ictGp +$chemGp +$phyGp +$bioGp)/6;
                                    $GPA_w_OP = sprintf ("%.2f", $Gpa);
                                     echo $GPA_w_OP ;
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