<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hum_result;
use App\bs_result;
use App\sc_result;

use PDF;

class downloadController extends Controller
{ 
     public function huFullResultdownload(){
     	$hum_result = hum_result::orderBy('roll','ASC')->get();
     	$pdf = PDF::loadView('huFullResultDownload',compact('hum_result'))
     			//->setPaper('legal', 'landscape');
     			//->setPaper([0, 0, 685.98, 396.85], 'portrait');
                ->setPaper([0, 0, 1050, 600], 'portrait');
     	return $pdf->download('Humanities_Result.pdf');
     }
     public function scFullResultdownload(){
        $sc_result = sc_result::orderBy('roll','ASC')->get();
        $pdf = PDF::loadView('scFullResultdownload',compact('sc_result'))
                //->setPaper('legal', 'landscape');
                ->setPaper([0, 0, 1150, 600], 'portrait');
        return $pdf->download('Science_Result.pdf');
     }
     public function bsFullResultdownload(){
        $bs_result = bs_result::orderBy('roll','ASC')->get();
        $pdf = PDF::loadView('bsFullResultdownload',compact('bs_result'))
                //->setPaper('legal', 'landscape');
                 ->setPaper([0, 0, 1050, 600], 'portrait');
        return $pdf->download('Business.pdf');
     }


     public function resultCardDownload($roll){
     	$resultinfo= hum_result::where('roll',$roll)->first();
        $optional_sub=$resultinfo->optional_sub;
        if($resultinfo->optional_sub =239 && is_null($resultinfo->civics_mcq)){
        //return view('resultCard_w_civ',compact('resultinfo'));
            $pdf = PDF::loadView('resultCard_w_civ',compact('resultinfo')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('Hu-'.$resultinfo->name.
        '.pdf');
        //return view('resultCard',compact('resultinfo'));
        }

        elseif($resultinfo->optional_sub =239 && is_null($resultinfo->history_mcq)){
        //return view('resultCard_w_his',compact('resultinfo'));
            $pdf = PDF::loadView('resultCard_w_his',compact('resultinfo')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('Hu-'.$resultinfo->name.
        '.pdf');
        //return view('resultCard',compact('resultinfo'));
        }
        elseif($resultinfo->optional_sub =239 && is_null($resultinfo->s_work_mcq)){
            //dd($resultinfo);
        //return view('resultCard_w_work',compact('resultinfo'));
            $pdf = PDF::loadView('resultCard_w_work',compact('resultinfo')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('Hu-'.$resultinfo->name.
        '.pdf');
        //return view('resultCard',compact('resultinfo'));
        }
         elseif($resultinfo->optional_sub =239 && is_null($resultinfo->eco_mcq)){
        //return view('resultCard_w_eco',compact('resultinfo'));
            $pdf = PDF::loadView('resultCard_w_eco',compact('resultinfo')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('Hu-'.$resultinfo->name.
        '.pdf');
        //return view('resultCard',compact('resultinfo'));
         }
        else{ 
            //return view('resultCard',compact('resultinfo','optional_sub'));
            $pdf = PDF::loadView('resultCard',compact('resultinfo','optional_sub')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('Hu-'.$resultinfo->name.
        '.pdf');
        //return view('resultCard',compact('resultinfo'));

        }

      
     	 
     }

     public function bsResultCardDownload($roll){
        $bsResultInfo= bs_result::where('roll',$roll)->first();
        //dd($bsResultInfo);
        $pdf = PDF::loadView('bsResultCard',compact('bsResultInfo'))
                ->setPaper('a4','portrait');
        return $pdf->download('BS-'.$bsResultInfo->name.
        '.pdf');


    }
    public function scResultCardDownload($roll){
        $scResultInfo= sc_result::where('roll',$roll)->first();
        //dd($bsResultInfo);
        if($scResultInfo->optional_sub =239 && is_null($scResultInfo->bio_mcq)){
        //return view('resultCard_w_civ',compact('scResultInfo'));
            $pdf = PDF::loadView('scResultCard_w_bio',compact('scResultInfo')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('SC-'.$scResultInfo->name.
        '.pdf');
        //return view('resultCard',compact('scResultInfo'));
        }

        elseif($scResultInfo->optional_sub =239 && is_null($scResultInfo->math_mcq)){
        //return view('resultCard_w_his',compact('scResultInfo'));
            $pdf = PDF::loadView('scResultCard_w_math',compact('scResultInfo')) 
                 ->setPaper('a4', 'portrait');
                //->setPaper([0, 0, 685.98, 396.85], 'portrait');
      return $pdf->download('SC-'.$scResultInfo->name.
        '.pdf');
        //return view('resultCard',compact('scResultInfo'));
        }
         else{

        $pdf = PDF::loadView('scResultCard',compact('scResultInfo'))
                ->setPaper('a4','portrait');
        return $pdf->download('SC-'.$scResultInfo->name.
        '.pdf');
        }

    }
}
