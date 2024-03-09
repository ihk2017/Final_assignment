<?php

namespace App\Http\Controllers;


use Exception;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\View\View;
use App\Models\Producttype;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class ProducttypeController extends Controller
{
    
    function ProducttypeList(Request $request): JsonResponse
    {
       
        try {
            $user_id=Auth::id();
            $rows= Producttype::with('user','category')->where('user_id',$user_id)->get();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    
    public function getCategories()
    {
        $categories = Category::pluck('name', 'id');
        return response()->json(['categories' => $categories]);
    }
    
    function ProducttypeCreate(Request $request):JsonResponse
    {
       
        
        try {
            $request->validate([
                'name' => 'required|string|max:50',
                'category_id' => 'required|'
            ]);
            
            
            $user_id=Auth::id();
            Producttype::create([
                'name'          =>$request->input('name'),
                'category_id'   =>$request->input('category_id'),     
                'user_id'       =>$user_id
            ]);
           $rows=Category::where('user_id',$user_id)->get();
           
            return response()->json(['status' => 'success','rows' => $rows, 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProducttypeDelete(Request $request){
        try {
            $request->validate([
                'id'        => 'required|string|min:1'
            ]);
            $producttype_id =$request->input('id');
            $user_id        =Auth::id();
            Producttype::where('id',$producttype_id)->where('user_id',$user_id)->delete();
            return response()->json(['status' => 'success', 'message' => "Request Successful"]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

    function ProducttypeByID(Request $request){
        try {
            $request->validate([
                'id'        => 'required|min:1'
            ]);
            
            $producttype_id =$request->input('id');
            $user_id        =Auth::id();
            $rows           = Producttype::where('id',$producttype_id)->where('user_id',$user_id)->first();
            return response()->json(['status' => 'success', 'rows' => $rows]);
        }catch (Exception $e){
            return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
        }
    }

     function ProducttypeUpdate(Request $request){

         try {
             $request->validate([
                 'name' => 'required|string|max:50'
                 
             ]);

             $producttype_id =$request->input('id');
             $user_id=Auth::id();
             Producttype::where('id',$producttype_id)->where('user_id',$user_id)->update([
                 'name'=>$request->input('name')
                 
             ]);
             return response()->json(['status' => 'success', 'message' => "Request Successful"]);
         }catch (Exception $e){
             return response()->json(['status' => 'fail', 'message' => $e->getMessage()]);
         }
    }

}
