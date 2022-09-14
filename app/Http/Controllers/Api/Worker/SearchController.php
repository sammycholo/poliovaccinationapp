<?php

namespace App\Http\Controllers\Api\Worker;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Record;
use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
        $record = Record::where('cnic', $request->cnic)->first();
        if($record){
            return Api::setResponse('record', $record);
        }
        else{
            return APi::setMessage('No Record Found');
        }
    }
}
