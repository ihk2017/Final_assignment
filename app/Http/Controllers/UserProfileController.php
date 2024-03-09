<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    public function index(Request $request){
        $user=User::find(1);
        return view('components.dashboard.dashboard',compact('user'));
    }
}
