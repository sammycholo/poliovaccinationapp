<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\User;
use App\Models\Worker;
use Illuminate\Http\Request;

class MapController extends Controller
{
    public function vacinatedAreas(){
        $locations = Record::where('vac_status',true)->pluck('location');
        $workerLocation = Worker::pluck('location');
        return view('admin.map.index')->with('locations',$locations)->with('workerlocations', $workerLocation);
    }

    public function heatMapLocations(){
        $locations = Record::where('vac_status',true)->pluck('location');
        $workerLocation = Worker::pluck('location');
        return view('admin.map.vaccinatedAreas')->with('locations',$locations)->with('workerlocations', $workerLocation);
    }

    public function GetWorkerLocations(){
        $workerLocation = Worker::pluck('location');
        return response()->json($workerLocation);
    }
}
