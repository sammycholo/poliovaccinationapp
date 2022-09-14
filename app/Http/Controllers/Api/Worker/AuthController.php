<?php

namespace App\Http\Controllers\Api\Worker;

use App\Helpers\Api;
use App\Helpers\ApiValidate;
use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){

        $remember = $request->remember == 'on' ? true : false;
    
        $credentials = ApiValidate::login($request, Worker::class);
        if (Auth::guard('worker')->attempt($credentials)) {
            return Api::setResponse('user',Auth::guard('worker')->user()->withToken());
        } else
            return Api::setError('Invalid credentials');
    }
}
