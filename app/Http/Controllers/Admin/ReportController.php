<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Models\Record;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
 public function vaccinate(){
     $users = Record::where('vac_status', true)->get();
     return view('admin.report.vacReport')->with('users', $users);
 }

 public function nonVaccinate(){
    $users = Record::where('vac_status', false)->get();
    return view('admin.report.vacReport')->with('users', $users);
}
public function activeComp(){
    $campaigns = Campaign::where('start','<=',Carbon::today())->where('end','>=',Carbon::today())->get();
    return view('admin.report.compReport')->with('campaigns', $campaigns);
}
public function unActiveComp(){
    $campaigns = Campaign::where('end','<=',Carbon::today())->get();
    return view('admin.report.compReport')->with('campaigns', $campaigns);
}

}
