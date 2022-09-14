<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Applicants;
use App\Models\Volunteer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VolunteerController extends Controller
{
    public function allOppurtunies(){
        $volunteers= Volunteer::where('city', Auth::user()->city)->get();
        return Api::setResponse('volunteers', $volunteers);
    }
    public function applyOppurtunity(Request $request){
        Applicants::create(['user_id'=> Auth::user()->id,'volunteer_id'=>$request->opp_id]);
        return Api::setMessage('Applied Successfully');
    }
}
