<?php

namespace App\Http\Controllers;

use Exception;



use App\Models\Category;
use App\Models\Supplier;

use Illuminate\View\View;
use App\Models\Producttype;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class SupplierController extends Controller
{
    
    function SupplierList(Request $request): JsonResponse
    {
       
        try {
            $user_id=Auth::id();
            $rows= Supplier::with('user')->where('user_id',$user_id)->get();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    
    
    
    function SupplierCreate(Request $request):JsonResponse
    {
       
        
        try {
            $request->validate([
                'name' => 'required|string|max:50',
                'address' => 'required|string|max:50',
                'phone' => 'required|string|max:50'                                  
            ]);
            // ['name','address','email','phone','status','user_id'];
            
            $user_id=Auth::id();
            Supplier::create([
                'name'           =>$request->input('name'),
                'address'        =>$request->input('address'),
                'email'          =>$request->input('email'),
                'phone'          =>$request->input('phone'),        
                'user_id'        =>$user_id
            ]);
          // $rows=Category::where('user_id',$user_id)->get();
           
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function SupplierDelete(Request $request){
        try {
            $request->validate([
                'id'        => 'required|string|min:1'
            ]);
            $supplier_id =$request->input('id');
            $user_id        =Auth::id();
            Supplier::where('id',$supplier_id)->where('user_id',$user_id)->delete();
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }
    function SupplierByID(Request $request){
        try {
            $request->validate([
                'id'        => 'required|min:1'
            ]);
            
            $supplier_id    =$request->input('id');
            $user_id        =Auth::id();
            $rows           = Supplier::where('id',$supplier_id)->where('user_id',$user_id)->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

     function SupplierUpdate(Request $request){

         try {
             $request->validate([
                 'name' => 'required|string|max:50'
                 
                 
             ]);

             $supplier_id =$request->input('id');
             $user_id=Auth::id();
             Supplier::where('id',$supplier_id)->where('user_id',$user_id)->update([
                 'name'=>$request->input('name'),
                 'address'        =>$request->input('address'),
                 'email'        =>$request->input('email'),
                 'phone'        =>$request->input('phone'),
                 'status'        =>$request->input('status')
                 
             ]);
             return response()->json(['status' => 'success', 'message' => "Request Successful"]);
         }catch (Exception $e){
             return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
         }
    }
}
