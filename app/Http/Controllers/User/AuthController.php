<?php

namespace App\Http\Controllers\User;

use App\Helpers\Validate;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;
use phpDocumentor\Reflection\Location;
use PHPQRCode\QRcode;

class AuthController extends Controller
{
    public function login(Request $request){
        $remember = $request->remember == 'on' ? true : false;
        $cred = Validate::login($request, User::class);
        if(Auth::attempt($cred,$remember)){
            return redirect()->route('user.dashboard');
        }else{
            return redirect()->back();
        }
    }

    public function register(Request $request){
        $credentials = Validate::webRegister($request, User::class);
        $ecc = 'H';
        $pixel_size = 20;
        $frame_size = 5;
        $path = '/qrcode/'.rand(1, 1000) . ".png";
        $file = public_path(). $path;
        $qr = QRcode::png($credentials['name'].$credentials['cnic'].$credentials['phone'].$credentials['email'], $file, $ecc, $pixel_size, $frame_size);
        $user = User::create(['qr_code'=> $path]+$credentials);
        alert()->success('Registered Successfully','Success');
        return redirect()->route('front.index');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('front.login');
    }
}
