<?php

namespace App\Helpers;

use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class Validate {

    public static function login($request, $model){

        $validator = Validator::make($request->all(),$model::loginRules());
        
        if($validator->fails())
            throw new HttpResponseException(Api::failed($validator));
        else
            return[
                'email' => $request->email,
                'password' => $request->password
            ];
    }
    
    public static function register($request, $model){

        $validator = Validator::make($request->all(),$model::registerRules());
        
        if($validator->fails())
            throw new HttpResponseException(Api::failed($validator));
        else
            return[
                'name' => $request->name,
                'email' => $request->email,
                'cnic' => $request->cnic,
                'phone' => $request->phone,
                'password' => $request->password,
                'city' => $request->city,
                'api_token' => Str::random(60),
            ];
    }
        
    public static function webRegister($request, $model, $addVerification = false){

        $validator = Validator::make($request->all(),$model::registerRules());
        
        if($validator->fails()){
            alert()->error($validator->errors()->first());
            Redirect::to(route('front.register'))->withInput()->send();
        }
        else{
            $data = [ 'api_token' => Str::random(60),
            ]+$request->all();
            if($addVerification) $data['email_verify_code'] = Str::random(20);
            return $data;
        }
          
    }
    
    public static function workerRegister($request, $model, $addVerification = false){

        $validator = Validator::make($request->all(),$model::registerRules());
        
        if($validator->fails()){
            toastr()->success($validator->errors()->first());
            Redirect::to(route('front.register'))->withInput()->send();
        }
        else{
            $data = [ 'api_token' => Str::random(60),
                         ] + $request->all();
            if($addVerification) $data['email_verify_code'] = Str::random(20);
            return $data;
        }
          
    }

}