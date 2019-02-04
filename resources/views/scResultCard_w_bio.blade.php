 
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Result Card</title>
  	<meta charset="UTF-8">
		<title> Mark-sheet </title>
		<link rel="stylesheet" href="framework/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/result_custom.css">
  </head>
  <body style="font-size: 18px;">
  
 
 <div class="row">
	<div class="col-md-12" align="center">
		<h3>Tejgaon Adarsha School & College</h3> 
		<h4>Half Yearly Exam.-2018 </h4> 
		<h3><b> <u> Result Card  </u> </b></h3>  
		</div>
</div>
<div class="row">
	<div class="col-md-12" align="center">
	 <table  style="min-width: 200px;" align="center">
		<tr>
			<td><b>Roll</b></td> <td>: {{$scResultInfo->roll}} </td>
		</tr>
		<tr>
			<td><b>Name</b></td> <td>: {{ $scResultInfo->name}} </td>
		</tr>
		<tr>
			<td><b>Group </b></td> <td>: Science </td>
		</tr>
		<tr>
			<td><b>Class </b></td> <td>: XI </td>
		</tr>
	</table>
	</div>
</div>
<div class="row">
	<div  class="col-md-12" align="center">
	<table class="table table-bordered table-striped table-hover" style="min-width: 500px;" align="center" border="5px">
		<tr align="center">
			<td rowspan="2"><br/>Subject</td>
			<td colspan="6">Obtained Number</td>
		</tr>

		<tr align="center">
			<td>MCQ</td>
			<td>CQ</td>
			<td>Pra</td>
			<td>TOTAL</td>
			<td>G.P</td>
			<td>L.G</td>
		</tr>
		<tr align="center">
			<td>Bangla</td>
			<td>{{ $bangla_mcq=$scResultInfo->bangla_mcq }}</td>
			<td>{{ $bangla_cq =$scResultInfo->bangla_cq }}</td>
			<td></td>
			<td>
				{{$banTotal  = $bangla_mcq+$bangla_cq}}
			</td>
			<td>
				@if( $banTotal>0 && $banTotal<=32)
                                        <h6 style='color:red;'>{{ $banGp= 0.00 }}</h6>
                                         @elseif(($bangla_mcq>0 && $bangla_mcq<10) || ($bangla_cq>0 && $bangla_cq <=22))
                                          <h6 style='color:red;'>{{  $banGp= 0.00 }}</h6>
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
			<td>
				@if( $banTotal>0 && $banTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($bangla_mcq>0 && $bangla_mcq<10) || ($bangla_cq>0 && $bangla_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($banTotal>32 && $banTotal<=39)
                                        {{'D'}}
                                         @elseif($banTotal>39 && $banTotal<=49)
                                        {{'C'}}
                                         @elseif($banTotal>49 && $banTotal<=59)
                                        {{'B'}}
                                         @elseif($banTotal>59 && $banTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($banTotal>69 && $banTotal<=79)
                                        {{'A'}}
                                         @elseif($banTotal>79 && $banTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
			

		</tr>
		<tr align="center">
			<td>English</td>
			<td> </td>
			<td> </td>
			<td></td>
			<td>{{ $engTotal =$scResultInfo->english }}</td>
			<td>
									@if( $engTotal>0 && $engTotal<=32)
                                        <h6 style='color:red;'>{{ $engGp= 0.00 }}</h6>
                                         
                                        @elseif($engTotal>32 && $engTotal<=39)
                                        {{$engGp=1.00}}
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
			<td> 
				@if( $engTotal>0 && $engTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         
                                        @elseif($engTotal>32 && $engTotal<=39)
                                        {{'D'}}
                                         @elseif($engTotal>39 && $engTotal<=49)
                                        {{'C'}}
                                         @elseif($engTotal>49 && $engTotal<=59)
                                        {{'B'}}
                                         @elseif($engTotal>59 && $engTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($engTotal>69 && $engTotal<=79)
                                        {{'A'}}
                                         @elseif($engTotal>79 && $engTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<tr align="center">
			<td>ICT</td>
			<td>{{ $ict_mcq =$scResultInfo->ict_mcq }}</td>
			<td>{{ $ict_cq =$scResultInfo->ict_cq }}</td>
			<td>{{ $ict_prac =$scResultInfo->ict_prac }}</td>
			<td>{{$ictTotal  = $ict_mcq+$ict_cq+$ict_prac}}</td>
			<td>
							@if( $ictTotal>0 && $ictTotal<=32)
                                        <h6 style='color:red;'>{{ $ictGp= 0.00 }}</h6>
                                         @elseif(($ict_mcq>0 && $ict_mcq<=7) || ($ict_cq>0 && $ict_cq <=16)||($ict_prac>0 && $ict_prac<=7))
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
                                        {{ $ictGp=5 }}
                                    
                                    @endif
                </td>
			<td>
							@if( $ictTotal>0 && $ictTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($ict_mcq>0 && $ict_mcq<=7) || ($ict_cq>0 && $ict_cq <=16)||($ict_prac>0 && $ict_prac<=7))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($ictTotal>32 && $ictTotal<=39)
                                        {{'D'}}
                                         @elseif($ictTotal>39 && $ictTotal<=49)
                                        {{'C'}}
                                         @elseif($ictTotal>49 && $ictTotal<=59)
                                        {{'B'}}
                                         @elseif($ictTotal>59 && $ictTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($ictTotal>69 && $ictTotal<=79)
                                        {{'A'}}
                                         @elseif($ictTotal>79 && $ictTotal<=100)
                                        {{ '+' }}
                                    
                                    @endif
                </td>
		</tr>
		<tr align="center">
			<td>Chemistry</td>
			<td>{{ $chem_mcq =$scResultInfo->chem_mcq }}</td>
			<td>{{ $chem_cq =$scResultInfo->chem_cq }}</td>
			<td>{{ $chem_prac =$scResultInfo->chem_prac }}</td>
			<td>{{$chemTotal  = $chem_mcq+$chem_cq}}</td>
			<td>
				@if( $chemTotal>0 && $chemTotal<=32)
                                        <h6 style='color:red;'>{{ $chemGp=0.00 }}</h6>
                                         @elseif(($chem_mcq>0 && $chem_mcq<=9) || ($chem_cq>0 && $chem_cq <=22)||($chem_prac>0 && $chem_prac<=7))
                                          <h6 style='color:red;'>{{$chemGp= 0.00 }}</h6>
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
			<td>
                @if( $chemTotal>0 && $chemTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($chem_mcq>0 && $chem_mcq<=9) || ($chem_cq>0 && $chem_cq <=22)||($chem_prac>0 && $chem_prac<=7))
                                          <h6 style='color:red;'>{{'F' }}</h6>
                                        @elseif($chemTotal>32 && $chemTotal<=39)
                                        {{'D'}}
                                         @elseif($chemTotal>39 && $chemTotal<=49)
                                        {{'C'}}
                                         @elseif($chemTotal>49 && $chemTotal<=59)
                                        {{'B'}}
                                         @elseif($chemTotal>59 && $chemTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($chemTotal>69 && $chemTotal<=79)
                                        {{'A'}}
                                         @elseif($chemTotal>79 && $chemTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
				 
			</td>
		</tr>
		<tr align="center">
			<td>Physics</td>
			<td>{{ $phy_mcq =$scResultInfo->phy_mcq }}</td>
			<td>{{ $phy_cq =$scResultInfo->phy_cq }}</td>
			<td>{{ $phy_prac =$scResultInfo->phy_prac }}</td>
			<td>{{$phyTotal  = $phy_mcq+$phy_cq}}</td>
			<td>
				@if( $phyTotal>0 && $phyTotal<=32)
                                        <h6 style='color:red;'>{{$phyGp= 0.00 }}</h6>
                                         @elseif(($phy_mcq>0 && $phy_mcq<=9) || ($phy_cq>0 && $phy_cq <=22)||($phy_prac>0 && $phy_prac<=7))
                                          <h6 style='color:red;'>{{ $phyGp=0.00 }}</h6>
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
			<td>
				@if( $phyTotal>0 && $phyTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($phy_mcq>0 && $phy_mcq<10) || ($phy_cq>0 && $phy_cq <=22)||($phy_prac>0 && $phy_prac<=7))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($phyTotal>32 && $phyTotal<=39)
                                        {{'D'}}
                                         @elseif($phyTotal>39 && $phyTotal<=49)
                                        {{'C'}}
                                         @elseif($phyTotal>49 && $phyTotal<=59)
                                        {{'B'}}
                                         @elseif($phyTotal>59 && $phyTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($phyTotal>69 && $phyTotal<=79)
                                        {{'A'}}
                                         @elseif($phyTotal>79 && $phyTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<tr align="center">
			<td>Biology</td>
			<td>{{ $bio_mcq =$scResultInfo->bio_mcq }}</td>
			<td>{{ $bio_cq =$scResultInfo->bio_cq }}</td>
			<td>{{ $bio_prac =$scResultInfo->bio_prac }}</td>
			<td>{{$bioTotal  = $bio_mcq+$bio_cq}}</td>
			<td>
				@if( $bioTotal>0 && $bioTotal<=32)
                                        <h6 style='color:red;'>{{ $bioGp=0.00 }}</h6>
                                         @elseif(($bio_mcq>0 && $bio_mcq<=9) || ($bio_cq>0 && $bio_cq <=22)||($bio_prac>0 && $bio_prac<=7))
                                          <h6 style='color:red;'>{{ $bioGp=0.00 }}</h6>
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
			<td>
				@if( $bioTotal>0 && $bioTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($bio_mcq>0 && $bio_mcq<10) || ($bio_cq>0 && $bio_cq <=22)||($bio_prac>0 && $bio_prac<=7))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($bioTotal>32 && $bioTotal<=39)
                                        {{'D'}}
                                         @elseif($bioTotal>39 && $bioTotal<=49)
                                        {{'C'}}
                                         @elseif($bioTotal>49 && $bioTotal<=59)
                                        {{'B'}}
                                         @elseif($bioTotal>59 && $bioTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($bioTotal>69 && $bioTotal<=79)
                                        {{'A'}}
                                         @elseif($bioTotal>79 && $bioTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		 <tr align="center">
			<td>Mathematics </td>
			<td>{{ $math_mcq =$scResultInfo->math_mcq }}</td>
			<td>{{ $math_cq =$scResultInfo->math_cq }}</td>
			<td>{{ $math_prac =$scResultInfo->math_prac }}</td>
			<td>{{$mathTotal  = $math_mcq+$math_cq}}</td>
			<td>
				@if( $mathTotal>0 && $mathTotal<=32)
                                        <h6 style='color:red;'>{{ $mathGp=0.00 }}</h6>
                                         @elseif(($math_mcq>0 && $math_mcq<10) || ($math_cq>0 && $math_cq <=22)||($math_prac>0 && $math_prac<=7))
                                          <h6 style='color:red;'>{{ $mathGp=0.00 }}</h6>
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
                                    
                                    @endif
			</td>
<td>
				@if( $mathTotal>0 && $mathTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($math_mcq>0 && $math_mcq<10) || ($math_cq>0 && $math_cq <=22)||($math_prac>0 && $math_prac<=7))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($mathTotal>32 && $mathTotal<=39)
                                        {{'D'}}
                                         @elseif($mathTotal>39 && $mathTotal<=49)
                                        {{'C'}}
                                         @elseif($mathTotal>49 && $mathTotal<=59)
                                        {{'B'}}
                                         @elseif($mathTotal>59 && $mathTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($mathTotal>69 && $mathTotal<=79)
                                        {{'A'}}
                                         @elseif($mathTotal>79 && $mathTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr> 
		<tr align="center">
			<td>Agriculture </td>
			<td>{{ $agri_mcq =$scResultInfo->agri_mcq }}</td>
			<td>{{ $agri_cq =$scResultInfo->agri_cq }}</td>
			<td>{{ $agri_prac =$scResultInfo->agri_prac }}</td>
			<td>{{$agriTotal  = $agri_mcq+$agri_cq+$agri_prac}}</td>
			<td>
				@if( $agriTotal>0 && $agriTotal<=32)
                                        <h6 style='color:red;'>{{ $agriGp=0.00 }}</h6>
                                         @elseif(($agri_mcq>0 && $agri_mcq<=7) || ($agri_cq>0 && $agri_cq <=16)|| ($agri_prac>0 && $agri_prac <=7))
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
			<td>
				@if( $agriTotal>0 && $agriTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($agri_mcq>0 && $agri_mcq<=7) || ($agri_cq>0 && $agri_cq <=16)|| ($agri_prac>0 && $agri_prac <=7))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($agriTotal>32 && $agriTotal<=39)
                                        {{'D'}}
                                         @elseif($agriTotal>39 && $agriTotal<=49)
                                        {{'C'}}
                                         @elseif($agriTotal>49 && $agriTotal<=59)
                                        {{'B'}}
                                         @elseif($agriTotal>59 && $agriTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($agriTotal>69 && $agriTotal<=79)
                                        {{'A'}}
                                         @elseif($agriTotal>79 && $agriTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		 
		
	 </table>
	</div>
</div><br/><br/>
<div class="row">
 
	 <div class="col-md-12" align="center">
	<table  style="min-width: 600px;" >
		<tr align="left">
			<td colspan="2"><b>GPA</b>   : 
				<?php
                
				//$optional_sub =$scResultInfo->optional_sub;
				
                 //if($optional_sub)
                    if($banGp==0 || $engGp==0 ||$ictGp==0 || $chemGp==0 || $phyGp==0 || $mathGp==0)
                      {
                        $GPA=0;
                    echo "<span style='color:red;'>$GPA(F)</span>";
                     }
                    else{
                            
                    $Gpa=($banGp +$engGp +$ictGp +$chemGp +$phyGp +$mathGp)/6;
                    $GPA = sprintf ("%.2f", $Gpa);
                    echo $GPA;}
                 
                    
				
				                 ?>
			  </td>
			<td colspan="2"><b>Total Number</b>  :  {{ $banTotal+ $engTotal+ $ictTotal+ $chemTotal+ $phyTotal+ $mathTotal+ $agriTotal }}</td> 
		</tr><br/>
        <tr><td>
           <b> GPA</b> <span style="font-size: 12px;">(Without 4th sub)</span> : <?php
             if($banGp==0 || $engGp==0 ||$ictGp==0 || $chemGp==0 || $phyGp==0 || $mathGp==0)
                      {
                        $GPA_W_OP=0;
                    echo "<span style='color:red;'>$GPA_W_OP (F)</span>";
                     }
                    else{
                            if($agriGp>2){
                            $optional=$agriGp-2;
                               }else{$optional=0;}
                    $Gpa=($banGp +$engGp +$ictGp +$chemGp +$phyGp +$mathGp+$optional)/6;
                    $GPA_W_OP = sprintf ("%.2f", $Gpa);
                    echo $GPA_W_OP;}
                    ?>
        </td><td></td></tr>
       
		<tr>
			<td colspan="2"><b>Comment about result </b>  : 
                @if($GPA_w_OP==5)
                    {{"Excellent"}}
                @elseif($GPA_w_OP>=4 && $GPA_w_OP<5)
                    {{"Best"}}
                @elseif($GPA_w_OP>=3 && $GPA_w_OP<4)
                {{"Better"}}
                @elseif($GPA_w_OP>=2.5 && $GPA_w_OP<3)    
                    {{"Good"}}
                @elseif($GPA_w_OP>=1 && $GPA_w_OP<2.5)
                {{"Not so good"}}
                @else
                {{"Very bad"}}
                @endif
             </td>
			 
		</tr>
		 
	</table>
</div>
</div> 
<div class="row">
    <div  class="col-md-12">
        <table  style="min-width: 700px;" >
             
            <tr>
                <td><br/><b> .................................................... <br/>( Signature of Guide Teacher )</b> </td>
                <td align="right"><br/><b> ...........................................  <br/> ( Signature of Principal )</b> </td>
                 
            </tr>
             
        </table>
    </div>
    
   </div>
 </body>
</html>

