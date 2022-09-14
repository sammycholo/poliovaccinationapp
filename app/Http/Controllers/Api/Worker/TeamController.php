<?php

namespace App\Http\Controllers\Api\Worker;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use App\Models\Worker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamController extends Controller
{
    public function viewTeam(Request $request){
        $workers = Worker::where('team_id', Auth::user()->team_id)->where('team_id','!=',null)->get();
        if($workers->count()>0){
            $response = new Api();
            $response->add('teamMembers', $workers);
            return $response->json();
        }
        else{
            return Api::setMessage('No Team Assign');
        }

    }
}
