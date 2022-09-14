<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\Api;
use App\Helpers\ApiValidate;
use App\Helpers\Validate;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPQRCode\QRcode;

class AuthController extends Controller
{
    public function login(Request $request){

        $remember = $request->remember == 'on' ? true : false;
    
        $credentials = ApiValidate::login($request, User::class);
        if (Auth::attempt($credentials, $remember)) {
            $response = new Api();
            $response->add('user', Auth::user()->withToken());
            return $response->json();
        } else
            return Api::setError('Invalid credentials');
    }


    public function register(Request $request){
        $ecc = 'H';
        $pixel_size = 20;
        $frame_size = 5;
        $path = '/qrcode/'.rand(1, 1000) . ".png";
        $file = public_path(). $path;
        $credentials = Validate::register($request, User::class);
        $qr = QRcode::png($credentials['name'].$credentials['cnic'].$credentials['phone'].$credentials['email'], $file, $ecc, $pixel_size, $frame_size);
        $user = User::create(['qr_code'=> $path]+$credentials);

        return Api::setResponse('user', $user->withToken());
    }

}
