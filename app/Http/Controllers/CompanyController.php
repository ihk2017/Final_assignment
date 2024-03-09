<?php

namespace App\Http\Controllers;

use App\Models\Company;

use Exception;

use App\Models\Category;
use App\Models\Supplier;

use Illuminate\View\View;
use App\Models\Producttype;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    function CompanyList(Request $request): JsonResponse
    {
       
        try {
            $user_id=Auth::id();
            $rows= Company::with('user')->where('user_id',$user_id)->get();
            
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function CompanyCreate(Request $request):JsonResponse
    {
       
        
        try {
            $request->validate([
                'name' => 'required|string|max:50',
                'organizationtype_id' => 'required|string|max:50'
                                              
            ]);
            // ['name','address','email','phone','status','user_id'];
            
            $user_id=Auth::id();
            Company::create([
                'name'           =>$request->input('name'),
                'organizationtype_id'        =>$request->input('organizationtype_id'),        
                'user_id'        =>$user_id
            ]);
          // $rows=Category::where('user_id',$user_id)->get();
           
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }


    function CompanyDelete(Request $request){
        try {
            $request->validate([
                'id'        => 'required|string|min:1'
            ]);
            $company_id =$request->input('id');
            $user_id        =Auth::id();
            Company::where('id',$company_id)->where('user_id',$user_id)->delete();
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
  
  
    function CompanyByID(Request $request){
        try {
            $request->validate([
                'id'        => 'required|min:1'
            ]);
            
            $company_id     =   $request->input('id');
            $user_id        =   Auth::id();
            $rows           =   Company::where('id',$company_id)->where('user_id',$user_id)->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

     function CompanyUpdate(Request $request){

         try {
             $request->validate([
                 'name' => 'required|string|max:50'
                 
                 
             ]);

             $company_id =$request->input('id');
             $user_id=Auth::id();
             Company::where('id',$company_id)->where('user_id',$user_id)->update([
                 'name'             =>$request->input('name'),
                 'organizationtype_id'          =>$request->input('organizationtype_id')
                                 
                 
             ]);
             return response()->json(['status' => 'success', 'message' => "Request Successful"]);
         }catch (Exception $e){
             return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
         }
    }

}
