<?php

namespace App\Http\Controllers;

use Exception;


use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

use App\Models\StudentsRegistration;
use Illuminate\Support\Facades\Auth;

class StudentsRegistrationController extends Controller
{
    function RegCreate(Request $request):JsonResponse
    {
        try {
            $request->validate([
                'sname' => 'required|string|max:50',
                'fname' => 'required|string|max:50',
                'mname' => 'required|string|max:50',
                'address' => 'required|string', 
                'profession' => 'required|string', 
                'mobile' => 'required|string', 
                'sscpasyr' => 'required|string', 
                'edugroup' => 'required|string',
                'regfees' => 'required|string',
                'qty' => 'required|string',
                
            ]);

            // 'sname','fname', 'mname','address','profession','mobile', 
            // 'email','sscpasyr','edugroup','regno','picture','regfees',
            // 'qty','user_id'

            $user_id=Auth::id();
            StudentsRegistration::create([
                'sname'=>$request->input('sname'),
                'fname'=>$request->input('fname'),
                'mname'=>$request->input('mname'),
                'address'=>$request->input('address'),
                'profession'=>$request->input('address'),
                'mobile'=>$request->input('mobile'),
                'email'=>$request->input('email'), 
                'sscpasyr'=>$request->input('sscpasyr'),
                'edugroup'=>$request->input('edugroup'),
                'regno'=>$request->input('regno'),
                'regfees'=>$request->input('regfees'),
                'qty'=>$request->input('qty'),
                'user_id'=>$user_id
            ]);
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function RegList(Request $request): JsonResponse
    {
        try {
            $user_id=Auth::id();
            $rows= StudentsRegistration::where('user_id',$user_id)->get();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function RegDelete(Request $request){
        try {
            $request->validate([
                'id' => 'required|string|min:1'
            ]);
            $customer_id=$request->input('id');
            $user_id=Auth::id();
            Customer::where('id',$customer_id)->where('user_id',$user_id)->delete();
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function RegByID(Request $request){
        try {
            $request->validate([
                'id' => 'required|min:1'
            ]);
            $customer_id=$request->input('id');
            $user_id=Auth::id();
            $rows= Customer::where('id',$customer_id)->where('user_id',$user_id)->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

     function RegUpdate(Request $request){

         try {
             $request->validate([
                 'name' => 'required|string|max:50',
                 'email' => 'required|string|email|max:50',
                 'mobile' => 'required|string|min:11',
                 'id'=>'required|min:1',
             ]);

             $customer_id=$request->input('id');
             $user_id=Auth::id();
             Customer::where('id',$customer_id)->where('user_id',$user_id)->update([
                 'name'=>$request->input('name'),
                 'email'=>$request->input('email'),
                 'mobile'=>$request->input('mobile'),
             ]);
             return response()->json(['status' => 'success', 'message' => "Request Successful"]);
         }catch (Exception $e){
             return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
         }
    }
}
