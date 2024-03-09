<?php

namespace App\Http\Controllers;

use App\Models\Jobdesc;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobdescController extends Controller
{
    function JobdescCreate(Request $request){
        try{
            $request->validate([
                'title' => 'required|string|min:2',
                'company_id' => 'required|string',
                'jobtype_id' => 'required|string'
            ]);
            $user_id=Auth::id();
            Jobdesc::create([
                'title'                 =>$request->input('title'),
                'company_id'            =>$request->input('company_id'),
                'jobtype_id'            =>$request->input('jobtype_id'),
                'job_location'          =>$request->input('job_location'),
                'vacant_qty'            =>$request->input('vacant_qty'),
                'required_edication'    =>$request->input('required_edication'),
                'min_experiences_yr'    =>$request->input('min_experiences_yr'),
                'salary_range'          =>$request->input('salary_range'),
                'benefits'              =>$request->input('benefits'),
                'age_limit'             =>$request->input('age_limit'),
                'additional_requirement'=>$request->input('additional_requirement'),
                'responsibilities'      =>$request->input('responsibilities'),
                'employement_status'    =>$request->input('employement_status'),
                'last_date'             =>$request->input('last_date'),
                'user_id'=>$user_id
            ]);

     // `id`, `user_id`, `title`, `company_id`, `jobtype_id`, `job_location`, `vacant_qty`, `required_edication`, `min_experiences_yr`, `salary_range`, `benefits`, `age_limit`, `additional_requirement`, `responsibilities`, `employement_status`, `last_date`, `no_off_applicant`, `created_at`, `updated_at`


            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    
    function JobdescList(Request $request)
    {
        try {
            $user_id=Auth::id();
            $rows= Jobdesc::where('user_id',$user_id)->with('company','jobtype')->get();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    

    



}
