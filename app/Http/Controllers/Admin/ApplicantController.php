<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Applicants;
use App\Models\User;
use App\Models\Volunteer;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function applicants(Request $request, $opp_id){
        $applicant_ids = Applicants::where('volunteer_id', $opp_id)->get();
        $applicants=null;
        $jobDetail = Volunteer::where('id', $opp_id)->first();
        foreach($applicant_ids as $id){
            $applicants = User::where('id', $id->user_id)->get();
        }
        return view('admin.volunteer.applicants')->with('applicants', $applicants)->with('jobDetail', $jobDetail);
    }
}
