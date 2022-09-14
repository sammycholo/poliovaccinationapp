<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Complain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ComplainController extends Controller
{
    public function regComplain(Request $request){
        $complain= Complain::create(['user_id'=>Auth::user()->id]+$request->all());
        return Api::setResponse('complain', $complain);

    }
}
