 
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
			<td><b>Roll</b></td> <td>: {{$resultinfo->roll}} </td>
		</tr>
		<tr>
			<td><b>Name</b></td> <td>: {{ $resultinfo->name}} </td>
		</tr>
		<tr>
			<td><b>Group </b></td> <td>: Humanities </td>
		</tr>
		<tr>
			<td><b>Class </b></td> <td>: XI </td>
		</tr>
	</table>
	</div>
</div>
<div class="row">
	<div  class="col-md-12" align="center">
	<table class="table table-bordered table-striped table-hover" style="min-width: 500px;" align="center" border="1px">
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
			<td>{{ $bangla_mcq=$resultinfo->bangla_mcq}}</td>
			<td>{{ $bangla_cq =$resultinfo->bangla_cq }}</td>
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
			<td>{{ $engTotal =$resultinfo->english }}</td>
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
			<td>{{ $ict_mcq =$resultinfo->ict_mcq }}</td>
			<td>{{ $ict_cq =$resultinfo->ict_cq }}</td>
			<td>{{ $ict_prac =$resultinfo->ict_prac }}</td>
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
			<td>S. Work</td>
			<td>{{ $s_work_mcq =$resultinfo->s_work_mcq }}</td>
			<td>{{ $s_work_cq =$resultinfo->s_work_cq }}</td>
			<td></td>
			<td>{{$sworkTotal  = $s_work_mcq+$s_work_cq}}</td>
			<td>
				@if( $sworkTotal>0 && $sworkTotal<=32)
                                        <h6 style='color:red;'>{{ $workGp=0.00 }}</h6>
                                         @elseif(($s_work_mcq>0 && $s_work_mcq<=9) || ($s_work_cq>0 && $s_work_cq <=22))
                                          <h6 style='color:red;'>{{$workGp= 0.00 }}</h6>
                                        @elseif($sworkTotal>32 && $sworkTotal<=39)
                                        {{$workGp=1}}
                                         @elseif($sworkTotal>39 && $sworkTotal<=49)
                                        {{$workGp=2}}
                                         @elseif($sworkTotal>49 && $sworkTotal<=59)
                                        {{$workGp=3}}
                                         @elseif($sworkTotal>59 && $sworkTotal<=69)
                                        {{ $workGp=3.5 }}
                                         @elseif($sworkTotal>69 && $sworkTotal<=79)
                                        {{$workGp=4}}
                                         @elseif($sworkTotal>79 && $sworkTotal<=100)
                                        {{ $workGp=5 }}
                                    
                                    @endif
			</td>
			<td>
				@if( $sworkTotal>0 && $sworkTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($s_work_mcq>0 && $s_work_mcq<=9) || ($s_work_cq>0 && $s_work_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($sworkTotal>32 && $sworkTotal<=39)
                                        {{'D'}}
                                         @elseif($sworkTotal>39 && $sworkTotal<=49)
                                        {{'C'}}
                                         @elseif($sworkTotal>49 && $sworkTotal<=59)
                                        {{'B'}}
                                         @elseif($sworkTotal>59 && $sworkTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($sworkTotal>69 && $sworkTotal<=79)
                                        {{'A'}}
                                         @elseif($sworkTotal>79 && $sworkTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<tr align="center">
			<td>Is. History</td>
			<td>{{ $history_mcq =$resultinfo->history_mcq }}</td>
			<td>{{ $history_cq =$resultinfo->history_cq }}</td>
			<td></td>
			<td>{{$historyTotal  = $history_mcq+$history_cq}}</td>
			<td>
				@if( $historyTotal>0 && $historyTotal<=32)
                                        <h6 style='color:red;'>{{$hisGp= 0.00 }}</h6>
                                         @elseif(($history_mcq>0 && $history_mcq<=9) || ($history_cq>0 && $history_cq <=22))
                                          <h6 style='color:red;'>{{ $hisGp=0.00 }}</h6>
                                        @elseif($historyTotal>32 && $historyTotal<=39)
                                        {{$hisGp=1}}
                                         @elseif($historyTotal>39 && $historyTotal<=49)
                                        {{$hisGp=2}}
                                         @elseif($historyTotal>49 && $historyTotal<=59)
                                        {{$hisGp=3}}
                                         @elseif($historyTotal>59 && $historyTotal<=69)
                                        {{ $hisGp=3.5 }}
                                         @elseif($historyTotal>69 && $historyTotal<=79)
                                        {{$hisGp=4}}
                                         @elseif($historyTotal>79 && $historyTotal<=100)
                                        {{ $hisGp=5 }}
                                    
                                    @endif
			</td>
			<td>
				@if( $historyTotal>0 && $historyTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($history_mcq>0 && $history_mcq<10) || ($history_cq>0 && $history_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($historyTotal>32 && $historyTotal<=39)
                                        {{'D'}}
                                         @elseif($historyTotal>39 && $historyTotal<=49)
                                        {{'C'}}
                                         @elseif($historyTotal>49 && $historyTotal<=59)
                                        {{'B'}}
                                         @elseif($historyTotal>59 && $historyTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($historyTotal>69 && $historyTotal<=79)
                                        {{'A'}}
                                         @elseif($historyTotal>79 && $historyTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<tr align="center">
			<td>Civics</td>
			<td>{{ $civics_mcq =$resultinfo->civics_mcq }}</td>
			<td>{{ $civics_cq =$resultinfo->civics_cq }}</td>
			<td></td>
			<td>{{$civicsTotal  = $civics_mcq+$civics_cq}}</td>
			<td>
				@if( $civicsTotal>0 && $civicsTotal<=32)
                                        <h6 style='color:red;'>{{ $civGp=0.00 }}</h6>
                                         @elseif(($civics_mcq>0 && $civics_mcq<=9) || ($civics_cq>0 && $civics_cq <=22))
                                          <h6 style='color:red;'>{{ $civGp=0.00 }}</h6>
                                        @elseif($civicsTotal>32 && $civicsTotal<=39)
                                        {{$civGp=1}}
                                         @elseif($civicsTotal>39 && $civicsTotal<=49)
                                        {{$civGp=2}}
                                         @elseif($civicsTotal>49 && $civicsTotal<=59)
                                        {{$civGp=3}}
                                         @elseif($civicsTotal>59 && $civicsTotal<=69)
                                        {{ $civGp=3.5 }}
                                         @elseif($civicsTotal>69 && $civicsTotal<=79)
                                        {{$civGp=4}}
                                         @elseif($civicsTotal>79 && $civicsTotal<=100)
                                        {{ $civGp=5 }}
                                    
                                    @endif
			</td>
			<td>
				@if( $civicsTotal>0 && $civicsTotal<=32)
                                        <h6 style='color:red;'>{{ 'F' }}</h6>
                                         @elseif(($civics_mcq>0 && $civics_mcq<10) || ($civics_cq>0 && $civics_cq <=22))
                                          <h6 style='color:red;'>{{ 'F' }}</h6>
                                        @elseif($civicsTotal>32 && $civicsTotal<=39)
                                        {{'D'}}
                                         @elseif($civicsTotal>39 && $civicsTotal<=49)
                                        {{'C'}}
                                         @elseif($civicsTotal>49 && $civicsTotal<=59)
                                        {{'B'}}
                                         @elseif($civicsTotal>59 && $civicsTotal<=69)
                                        {{ 'A-' }}
                                         @elseif($civicsTotal>69 && $civicsTotal<=79)
                                        {{'A'}}
                                         @elseif($civicsTotal>79 && $civicsTotal<=100)
                                        {{ 'A+' }}
                                    
                                    @endif
			</td>
		</tr>
		<tr align="center">
			<td>Economics</td>
			<td>{{ $eco_mcq =$resultinfo->eco_mcq }}</td>
			<td>{{ $eco_cq =$resultinfo->eco_cq }}</td>
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
		</tr>
		<tr align="center">
			<td>Agriculture</td>
			<td>{{ $agri_mcq =$resultinfo->agri_mcq }}</td>
			<td>{{ $agri_cq =$resultinfo->agri_cq }}</td>
			<td>{{ $agri_prac =$resultinfo->agri_prac }}</td>
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
</div><br/>
<div class="row">
 
	 <div class="col-md-12" align="center">
	<table  style="min-width: 600px;" >
        <tr align="left">
            <td><b>GPA</b>   : 
                <?php
                    if($banGp==0 || $engGp==0 ||$ictGp==0 || $workGp==0 || $civGp==0 || $hisGp==0
                         ){
                            $GPA=0.00;
                        echo "<span style='color:red;'> $GPA (F) </span>";}
                        else{
                                if($agriGp>2){
                                $optional=$agriGp-2;
                                }
                                else{$optional=0;}
                        $Gpa=($banGp +$engGp +$ictGp +$workGp +$civGp+$hisGp +$optional)/6;
                        $GPA = sprintf ("%.2f", $Gpa);
                        echo $GPA;}
                    
                    
                 
                                 ?>
              </td>
            <td align="center"><b>Total Number</b>  : {{$total_number=$banTotal+ $engTotal+ $ictTotal+ $historyTotal+ $civicsTotal+ $sworkTotal+ $agriTotal}}</td> 
        </tr>
         
        <tr><td colspan="2">
           <b> GPA</b> <span style="font-size: 12px;">(Without 4th sub)</span> : <?php
             if($banGp==0 || $engGp==0 ||$ictGp==0 || $workGp==0 || $civGp==0 || $hisGp==0)
                      {
                        $GPA_w_4th =0;
                    echo "<span style='color:red;'>$GPA_w_4th (F)</span>";
                     }
                    else{
                            
                    $Gpa=($banGp +$engGp +$ictGp +$workGp +$civGp +$hisGp)/6;
                    $GPA_w_4th = sprintf ("%.2f", $Gpa);
                    echo $GPA_w_4th;}
                    ?>
        </td> </tr>
        <tr>
            <td colspan="2"><b>Comment about result </b>  : 
                @if($GPA_w_4th==5)
                    {{"Excellent"}}
                @elseif($GPA_w_4th>=4 && $GPA_w_4th<5)
                    {{"Best"}}
                @elseif($GPA_w_4th>=3 && $GPA_w_4th<4)
                {{"Better"}}
                @elseif($GPA_w_4th>=2 && $GPA_w_4th<3)    
                    {{"Good"}}
                @elseif($GPA_w_4th>=1 && $GPA_w_4th<2)
                {{"Not so good"}}
                @else
                {{"Very Bad"}}
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

