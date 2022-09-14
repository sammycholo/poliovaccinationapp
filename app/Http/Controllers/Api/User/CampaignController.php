<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CampaignController extends Controller
{
    public function campaign(Request $request){
        $campaigns = Campaign::where('start','<=',Carbon::today())->where('end','>=',Carbon::today())->get();
        return Api::setResponse('campaigns', $campaigns);

    }
}
