 
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
			<td><b>Roll</b></td> <td>: {{$bsResultInfo->roll}} </td>
		</tr>
		<tr>
			<td><b>Name</b></td> <td>: {{ $bsResultInfo->name}} </td>
		</tr>
		<tr>
			<td><b>Group </b></td> <td>: Business Studies </td>
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
			<td>{{ $bangla_mcq=$bsResultInfo->bangla_mcq }}</td>
			<td>{{ $bangla_cq =$bsResultInfo->bangla_cq }}</td>
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
			<td>{{ $engTotal =$bsResultInfo->english }}</td>
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
			<td>{{ $ict_mcq =$bsResultInfo->ict_mcq }}</td>
			<td>{{ $ict_cq =$bsResultInfo->ict_cq }}</td>
			<td>{{ $ict_prac =$bsResultInfo->ict_prac }}</td>
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
			<td>Accounting</td>
			<td>{{ $acc_mcq =$bsResultInfo->acc_mcq }}</td>
			<td>{{ $acc_cq =$bsResultInfo->acc_cq }}</td>
			<td></td>
			<td>{{$accTotal  = $acc_mcq+$acc_cq}}</td>
			<td>
				@if( $accTotal>0 && $accTotal<=32)
                                        <h6 style='color:red;'>{{ $accGp=0.00 }}</h6>
                                         @elseif(($acc_mcq>0 && $acc_mcq<=9) || ($acc_cq>0 && $acc_cq <=22))
                                          <h6 style='color:red;'>{{$accGp= 0.00 }}</h6>
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
			<td>
                @if( $accTotal>0 && $accTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($acc_mcq>0 && $acc_mcq<=9) || ($acc_cq>0 && $acc_cq <=22))
                                          <h6 style='color:red;'>{{'F' }}</h6>
                                        @elseif($accTotal>32 && $accTotal<=39)
                                        {{'D'}}
                                         @elseif($accTotal>39 && $accTotal<=49)
                                        {{'C'}}
                                         @elseif($accTotal>49 && $accTotal<=59)
                                        {{'B'}}
                                         @elseif($accTotal>59 && $accTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($accTotal>69 && $accTotal<=79)
                                        {{'A'}}
                                         @elseif($accTotal>79 && $accTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
				 
			</td>
		</tr>
		<tr align="center">
			<td>Finance</td>
			<td>{{ $fin_mcq =$bsResultInfo->fin_mcq }}</td>
			<td>{{ $fin_cq =$bsResultInfo->fin_cq }}</td>
			<td></td>
			<td>{{$finTotal  = $fin_mcq+$fin_cq}}</td>
			<td>
				@if( $finTotal>0 && $finTotal<=32)
                                        <h6 style='color:red;'>{{$finGp= 0.00 }}</h6>
                                         @elseif(($fin_mcq>0 && $fin_mcq<=9) || ($fin_cq>0 && $fin_cq <=22))
                                          <h6 style='color:red;'>{{ $finGp=0.00 }}</h6>
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
			<td>
				@if( $finTotal>0 && $finTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($fin_mcq>0 && $fin_mcq<10) || ($fin_cq>0 && $fin_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($finTotal>32 && $finTotal<=39)
                                        {{'D'}}
                                         @elseif($finTotal>39 && $finTotal<=49)
                                        {{'C'}}
                                         @elseif($finTotal>49 && $finTotal<=59)
                                        {{'B'}}
                                         @elseif($finTotal>59 && $finTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($finTotal>69 && $finTotal<=79)
                                        {{'A'}}
                                         @elseif($finTotal>79 && $finTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<tr align="center">
			<td>B. Org</td>
			<td>{{ $b_org_mcq =$bsResultInfo->b_org_mcq }}</td>
			<td>{{ $b_org_cq =$bsResultInfo->b_org_cq }}</td>
			<td></td>
			<td>{{$b_OrgTotal  = $b_org_mcq+$b_org_cq}}</td>
			<td>
				@if( $b_OrgTotal>0 && $b_OrgTotal<=32)
                                        <h6 style='color:red;'>{{ $b_OrgGp=0.00 }}</h6>
                                         @elseif(($b_org_mcq>0 && $b_org_mcq<=9) || ($b_org_cq>0 && $b_org_cq <=22))
                                          <h6 style='color:red;'>{{ $b_OrgGp=0.00 }}</h6>
                                        @elseif($b_OrgTotal>32 && $b_OrgTotal<=39)
                                        {{$b_OrgGp=1}}
                                         @elseif($b_OrgTotal>39 && $b_OrgTotal<=49)
                                        {{$b_OrgGp=2}}
                                         @elseif($b_OrgTotal>49 && $b_OrgTotal<=59)
                                        {{$b_OrgGp=3}}
                                         @elseif($b_OrgTotal>59 && $b_OrgTotal<=69)
                                        {{ $b_OrgGp=3.5 }}
                                         @elseif($b_OrgTotal>69 && $b_OrgTotal<=79)
                                        {{$b_OrgGp=4}}
                                         @elseif($b_OrgTotal>79 && $b_OrgTotal<=100)
                                        {{ $b_OrgGp=5 }}
                                    
                                    @endif
			</td>
			<td>
				@if( $b_OrgTotal>0 && $b_OrgTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($b_org_mcq>0 && $b_org_mcq<10) || ($b_org_cq>0 && $b_org_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($b_OrgTotal>32 && $b_OrgTotal<=39)
                                        {{'D'}}
                                         @elseif($b_OrgTotal>39 && $b_OrgTotal<=49)
                                        {{'C'}}
                                         @elseif($b_OrgTotal>49 && $b_OrgTotal<=59)
                                        {{'B'}}
                                         @elseif($b_OrgTotal>59 && $b_OrgTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($b_OrgTotal>69 && $b_OrgTotal<=79)
                                        {{'A'}}
                                         @elseif($b_OrgTotal>79 && $b_OrgTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<!--<tr align="center">
			<td>Economics</td>
			<td>{{ $eco_mcq =$bsResultInfo->eco_mcq }}</td>
			<td>{{ $eco_cq =$bsResultInfo->eco_cq }}</td>
			<td></td>
			<td>{{$ecoTotal  = $eco_mcq+$eco_cq}}</td>
			<td>
				@if( $ecoTotal>0 && $ecoTotal<=32)
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
                                    
                                    @endif
			</td>
<td>
				@if( $ecoTotal>0 && $ecoTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($eco_mcq>0 && $eco_mcq<10) || ($eco_cq>0 && $eco_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($ecoTotal>32 && $ecoTotal<=39)
                                        {{'D'}}
                                         @elseif($ecoTotal>39 && $ecoTotal<=49)
                                        {{'C'}}
                                         @elseif($ecoTotal>49 && $ecoTotal<=59)
                                        {{'B'}}
                                         @elseif($ecoTotal>59 && $ecoTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($ecoTotal>69 && $ecoTotal<=79)
                                        {{'A'}}
                                         @elseif($ecoTotal>79 && $ecoTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>-->
		<tr align="center">
			<td>Agriculture</td>
			<td>{{ $agri_mcq =$bsResultInfo->agri_mcq }}</td>
			<td>{{ $agri_cq =$bsResultInfo->agri_cq }}</td>
			<td>{{ $agri_prac =$bsResultInfo->agri_prac }}</td>
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
                
				//$optional_sub =$resultinfo->optional_sub;
				
                 
                    if($banGp==0 || $engGp==0 ||$ictGp==0 || $accGp==0 || $finGp==0 || $b_OrgGp==0)
                      {
                    echo "<span style='color:red;'>0(F)</span>";
                     }
                    else{
                         if($agriGp>2){
                            $optional=$agriGp-2;
                               }else{$optional=0;}
                    $Gpa=($banGp +$engGp +$ictGp +$accGp +$finGp +$b_OrgGp+$optional)/6;
                    $GPA = sprintf ("%.2f", $Gpa);
                    echo $GPA;
                            
                   }
                 
                    
				
				                 ?>
			  </td>
			<td colspan="2"><b>Total Number</b>  :  {{$banTotal+$engTotal+$ictTotal+$accTotal+$finTotal+$b_OrgTotal+$agriTotal}}</td> 
		</tr><br/>
        <tr><td>
           <b> GPA</b> <span style="font-size: 12px;">(Without 4th sub)</span> : <?php
             if($banGp==0 || $engGp==0 ||$ictGp==0 || $accGp==0 || $finGp==0 || $b_OrgGp==0)
                      {
                        $GPA_w_OP=0;
                    echo "<span style='color:red;'>$GPA_w_OP (F)</span>";
                     }
                    else{
                         $Gpa=($banGp +$engGp +$ictGp +$accGp +$finGp +$b_OrgGp)/6;
                    $GPA_w_OP = sprintf ("%.2f", $Gpa);
                    echo $GPA_w_OP;
                           }
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
</div><br/><br/> 
<div class="row">
	<div  class="col-md-12">
		<table  style="min-width: 700px;" >
			<tr>
				<td colspan="2"><b> </td>
				<td colspan="2"><b> </td> 
			</tr>
			<tr>
				<td><br/><b> .................................................... <br/>( Signature of Guide Teacher )</b> </td>
				<td align="right"><br/><b> ...........................................  <br/> ( Signature of Principal )</b> </td>
				 
			</tr>
			 
		</table>
	</div>
	
   </div>
 </body>
</html>

