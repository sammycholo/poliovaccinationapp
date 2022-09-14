<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;


class ForgetController extends Controller
{
    public function sendCode(Request $request){
        $user = User::where('email', $request->email)->first();
        if ($user) {
            $user->code = rand(111111, 999999);
            $user->save();
            $this->sendMail($user);
            alert()->success('Verification code sent');
            return view('front.reset')->with('user',$user); 
        } else {
            alert()->error('Invalid email');
            return redirect()->back();
        }
        }

        private function sendMail($user)
        {
            $data = ['code' => $user->code];
            Mail::send('mail', $data, function ($message) use ($user) {
                $message->from('polio.com@gmail.com', 'TeamPolio');
                $message->to($user->email, $user->name)
                    ->subject('Reset Password');
            });
        }


        public function resetPassword(Request $request)
        {
    
            $user = User::find($request->id);
            if ($user) {
                if ($user->code == $request->code) {
                    $user->password = $request->password;
                    $user->code = null;
                    $user->save();
                } else {
                    alert()->error('Invalid code please try again');
                    return redirect()->route('front.forget');
                }
            } else {
                return redirect()->route('front.forget');
                alert()->error('Invalid email please try again');
            }
            alert()->success('Password reset successfuly');
            return redirect()->route('front.login');
        }
}
