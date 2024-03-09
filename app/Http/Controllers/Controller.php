<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Company;
use App\Models\Jobdesc;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function CompanyList(){

        $user_id=Auth::id();
        $companylist=Company::with('organizationtype')->get();
        $rows= Jobdesc::where('user_id',$user_id)->with('company','jobtype')->get();
       
        return view('pages.home',compact('companylist','rows'));
    }

    


    
}
