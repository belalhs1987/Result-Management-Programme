<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\hum_result;
use App\sc_result;
use App\bs_result;
use Session;
use Redirect;
use DB;

class resultController extends Controller
{
    public function huInsert(\App\developer\contact_info $contact){
    	$name= $contact->getName();
    	$contact=$contact->getContact();
    	//dd($contact);
    	return view('huResultInserForm',compact('name','contact'));

    }
   
     
    public function huInsertResult(Request $request){

    	     $hum_result 	= new hum_result;
	 		 $hum_result->roll 			=$request->roll;
	 		 $hum_result->name 			=$request->name;
	 		 $hum_result->bangla_mcq 	=$request->bangla_mcq;
	 		 $hum_result->bangla_cq 	=$request->bangla_cq;
	 		 $hum_result->english 		=$request->english;
	 		 $hum_result->ict_mcq 		=$request->ict_mcq;
	 		 $hum_result->ict_cq 		=$request->ict_cq;
	 		 $hum_result->ict_prac 		=$request->ict_prac;
	 		 $hum_result->s_work_mcq 		=$request->s_work_mcq;
	 		 $hum_result->s_work_cq 		=$request->s_work_cq;
	 		 $hum_result->history_mcq 		=$request->history_mcq;
	 		 $hum_result->history_cq 		=$request->history_cq;
	 		 $hum_result->civics_mcq 		=$request->civics_mcq;
	 		 $hum_result->civics_cq 		=$request->civics_cq;
	 		 $hum_result->eco_mcq 		=$request->eco_mcq;
	 		 $hum_result->eco_cq 		=$request->eco_cq;
	 		 $hum_result->agri_mcq 		=$request->agri_mcq;
	 		 $hum_result->agri_cq 		=$request->agri_cq;
	 		  $hum_result->agri_prac 		=$request->agri_prac;
	 		  $hum_result->optional_sub =$request->optional_sub;
	 		  $hum_result->save();
				Session::flash('message','Inserted Successfully');
			      return Redirect::back();
    }
    public function huEditResult($roll){
    	$hu_result=hum_result::where('roll',$roll)->get();
    	return view('huEditForm',compact('hu_result'));

    } 
    public function huUpdate(Request $request){
    	//dd($request->all());
    	DB::table('hum_results')
    		->where('roll',$request->old_roll)
    		->update([

    		   "roll" 			=>$request->roll,
	 		  "name" 			=>$request->name,
	 		  "bangla_mcq" 	=>$request->bangla_mcq,
	 		  "bangla_cq" 	=>$request->bangla_cq,
	 		  "english" 		=>$request->english,
	 		  "ict_mcq" 		=>$request->ict_mcq,
	 		  "ict_cq" 		=>$request->ict_cq,
	 		  "ict_prac" 		=>$request->ict_prac,
	 		  "s_work_mcq" 		=>$request->s_work_mcq,
	 		 "s_work_cq"		=>$request->s_work_cq,
	 		  "history_mcq" 		=>$request->history_mcq,
	 		  "history_cq" 		=>$request->history_cq,
	 		  "civics_mcq" 		=>$request->civics_mcq,
	 		  "civics_cq" 		=>$request->civics_cq,
	 		  "eco_mcq" 		=>$request->eco_mcq,
	 		  "eco_cq" 		=>$request->eco_cq,
	 		  "agri_mcq" 		=>$request->agri_mcq,
	 		  "agri_cq" 		=>$request->agri_cq,
	 		   "agri_prac" 		=>$request->agri_prac,
	 		   "optional_sub" =>$request->optional_sub,
	 		 
    		]);
    		Session::flash('message','Updated Successfully');
			      return redirect('huResultView');

    }

 public function huResultView(){

     	$hum_result = hum_result::orderBy('roll','ASC')->get();
     	// $news= Post::orderBy('created_at','ASC')->skip(2)->take(2)->get();;
     	 
     	return view('huResultView', compact('hum_result'));
     
    }

   
    public function deleteResult($roll){
    	//dd($roll);
    	hum_result::where('roll',$roll)->delete();
    	Session::flash('message','Deleted Successfully');
    	return Redirect::back();
    }
     public function scInsert(){
    	return view('ScInsertForm');
    }
     public function ScInsertMarks(Request $request){

    	     $sc_result 	= new sc_result;
	 		 $sc_result->roll 			=$request->roll;
	 		 $sc_result->name 			=$request->name;
	 		 $sc_result->bangla_mcq 	=$request->bangla_mcq;
	 		 $sc_result->bangla_cq 		=$request->bangla_cq;
	 		 $sc_result->english 		=$request->english;
	 		 $sc_result->ict_mcq 		=$request->ict_mcq;
	 		 $sc_result->ict_cq 		=$request->ict_cq;
	 		 $sc_result->ict_prac 		=$request->ict_prac;
	 		 $sc_result->chem_mcq 		=$request->chem_mcq;
	 		 $sc_result->chem_cq 		=$request->chem_cq;
	 		 $sc_result->chem_prac 		=$request->chem_prac;
	 		 $sc_result->phy_mcq 		=$request->phy_mcq;
	 		 $sc_result->phy_cq 		=$request->phy_cq;
	 		 $sc_result->phy_prac 		=$request->phy_prac;
	 		 $sc_result->bio_mcq 		=$request->bio_mcq;
	 		 $sc_result->bio_cq 		=$request->bio_cq;
	 		 $sc_result->bio_prac 		=$request->bio_prac;
	 		 $sc_result->math_mcq 		=$request->math_mcq;
	 		 $sc_result->math_cq 		=$request->math_cq;
	 		 $sc_result->math_prac 		=$request->math_prac;
	 		 $sc_result->agri_mcq 		=$request->agri_mcq;
	 		 $sc_result->agri_cq 		=$request->agri_cq;
	 		 $sc_result->agri_prac 		=$request->agri_prac;
	 		 $sc_result->optional_sub =$request->optional_sub;
	 		 $sc_result->save();
				Session::flash('message','Inserted Successfully');
			      return Redirect::back();
    }
    public function scEditResult($roll){
    	$sc_result=sc_result::where('roll',$roll)->get();
    	//dd($sc_result);
    	return view('scEditForm',compact('sc_result'));

    } 
    public function scUpdate(Request $request){
    	// dd($request->all());
    	DB::table('sc_results')
    		->where('roll',$request->old_roll)
    		->update([

    		   "roll" 			=>$request->roll,
	 		  "name" 			=>$request->name,
	 		  "bangla_mcq" 	=>$request->bangla_mcq,
	 		  "bangla_cq" 	=>$request->bangla_cq,
	 		  "english" 		=>$request->english,
	 		  "ict_mcq" 		=>$request->ict_mcq,
	 		  "ict_cq" 		=>$request->ict_cq,
	 		  "ict_prac" 		=>$request->ict_prac,
	 		  "chem_mcq" 		=>$request->chem_mcq,
	 		  "chem_cq" 		=>$request->chem_cq,
	 		  "chem_prac" 		=>$request->chem_prac,
	 		 "phy_mcq" 		=>$request->phy_mcq,
	 		 "phy_cq" 		=>$request->phy_cq,
	 		 "phy_prac" 		=>$request->phy_prac,
	 		  "bio_mcq" 		=>$request->bio_mcq,
	 		  "bio_cq" 		=>$request->bio_cq,
	 		  "bio_prac" 		=>$request->bio_prac,
	 		 "math_mcq" 		=>$request->math_mcq,
	 		  "math_cq" 		=>$request->math_cq,
	 		  "math_prac" 		=>$request->math_prac,
	 		 "agri_mcq" 		=>$request->agri_mcq,
	 		 "agri_cq" 		=>$request->agri_cq,
	 		 "agri_prac" 		=>$request->agri_prac,
	 		  "optional_sub" =>$request->optional_sub,
	 		 
    		]);
    		Session::flash('message','Updated Successfully');
			      return redirect('scResultView');

    }
     public function bsInsert(){
    	return view('BSInsertForm');
    }
    public function BsInsertMarks(Request $request){

    	     $bs_result 	= new bs_result;
	 		 $bs_result->roll 			=$request->roll;
	 		 $bs_result->name 			=$request->name;
	 		 $bs_result->bangla_mcq 	=$request->bangla_mcq;
	 		 $bs_result->bangla_cq 	=$request->bangla_cq;
	 		 $bs_result->english 		=$request->english;
	 		 $bs_result->ict_mcq 		=$request->ict_mcq;
	 		 $bs_result->ict_cq 		=$request->ict_cq;
	 		 $bs_result->ict_prac 		=$request->ict_prac;
	 		 $bs_result->acc_mcq 		=$request->acc_mcq;
	 		 $bs_result->acc_cq 		=$request->acc_cq;
	 		 $bs_result->fin_mcq 		=$request->fin_mcq;
	 		 $bs_result->fin_cq 		=$request->fin_cq;
	 		 $bs_result->b_org_mcq 		=$request->b_org_mcq;
	 		 $bs_result->b_org_cq 		=$request->b_org_cq;
	 		 $bs_result->eco_mcq 		=$request->eco_mcq;
	 		 $bs_result->eco_cq 		=$request->eco_cq;
	 		 $bs_result->agri_mcq 		=$request->agri_mcq;
	 		 $bs_result->agri_cq 		=$request->agri_cq;
	 		  $bs_result->agri_prac 		=$request->agri_prac;
	 		  $bs_result->optional_sub =$request->optional_sub;
	 		  $bs_result->save();
				Session::flash('message','Inserted Successfully');
			      return Redirect::back();
    }
	public function bsResultView(){

     	$bs_result = bs_result::orderBy('roll','ASC')->get();
     	 
     	return view('bsResultView', compact('bs_result'));
     
    }
    public function bsEditResult($roll){
    	$bs_result=bs_result::where('roll',$roll)->get();
    	return view('bsEditForm',compact('bs_result'));

    } 
    public function bsUpdate(Request $request){
    	//dd($request->all());
    	DB::table('bs_results')
    		->where('roll',$request->old_roll)
    		->update([

    		  'roll' 			=>$request->roll,
	 		  'name' 			=>$request->name,
	 		  'bangla_mcq' 		=>$request->bangla_mcq,
	 		  'bangla_cq' 	=>$request->bangla_cq,
	 		  'english' 		=>$request->english,
	 		  'ict_mcq' 		=>$request->ict_mcq,
	 		  'ict_cq' 		=>$request->ict_cq,
	 		  'ict_prac'		=>$request->ict_prac,
	 		  'acc_mcq' 		=>$request->acc_mcq,
	 		 'acc_cq' 		=>$request->acc_cq,
	 		  'fin_mcq' 		=>$request->fin_mcq,
	 		  'fin_cq' 		=>$request->fin_cq,
	 		  'b_org_mcq' 		=>$request->b_org_mcq,
	 		 'b_org_cq' 		=>$request->b_org_cq,
	 		  'eco_mcq' 		=>$request->eco_mcq,
	 		 'eco_cq' 		=>$request->eco_cq,
	 		  'agri_mcq' 		=>$request->agri_mcq,
	 		  'agri_cq' 		=>$request->agri_cq,
	 		   'agri_prac' 		=>$request->agri_prac,
	 		   'optional_sub' =>$request->optional_sub,
	 		 
    		]);
    		Session::flash('message','Updated Successfully');
			      return redirect('bsResultView');

    }
    public function bsDeleteResult($roll){
    	//dd($roll);
    	bs_result::where('roll',$roll)->delete();
    	Session::flash('message','Deleted Successfully');
    	return Redirect::back();
    }

    public function scResultView(){

     	$sc_result = sc_result::orderBy('roll','ASC')->get();
     	 
     	return view('scResultView', compact('sc_result'));
     
    }
     
    public function scDeleteResult($roll){
    	//dd($roll);
    	sc_result::where('roll',$roll)->delete();
    	Session::flash('message','Deleted Successfully');
    	return Redirect::back();
    }
       

    
   
    public function classPrac(){
    	return view('classPrac');
    }
}
