<?php

namespace App\Http\Controllers\Admin;

use App\Helpers\Validate;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $remember = $request->remember == 'on' ? true : false;
        $cred = Validate::login($request, Admin::class);
        if(Auth::guard('admin')->attempt($cred,$remember)){
            return redirect()->route('admin.dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
