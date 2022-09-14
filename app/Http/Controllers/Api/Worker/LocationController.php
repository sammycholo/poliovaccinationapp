<?php

namespace App\Http\Controllers\Api\Worker;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class LocationController extends Controller
{
    public function updateLocation(Request $request){
        $worker= Worker::find(Auth::user()->id);
        $worker->update(['location'=>$request->location]);
        return Api::setResponse('worker', $worker);
    }
}
