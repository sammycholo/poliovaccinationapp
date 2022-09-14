<?php

namespace App\Http\Controllers\Api\User;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPQRCode\QRcode;

class RecordController extends Controller
{
    public function addRecord(Request $request){
        $datas = Record::all();
        foreach($datas as $data){
            if($request->cnic == $data->cnic ){
                return Api::setMessage('Already Registered');

        }
        }
            $ecc = 'H';
            $pixel_size = 20;
            $frame_size = 5;
            $path = '/qrcode/'.rand(1, 1000) . ".png";
            $file = public_path(). $path;
            $qr = QRcode::png('Name: '.$request->name.'CNIC: '.$request->cnic.
            'Phone: '.$request->phone.'Vaccination Status: '.'0', $file, $ecc, $pixel_size, $frame_size);
                $record = Record::create(['user_id'=>Auth::user()->id,'qr_code'=>$path]+$request->all());
                return Api::setResponse('record', $record);
    }

    public function allRecords(Request $request){
        $records=Record::where('user_id',Auth::user()->id)->get();
        if($records->count()>0){
            return Api::setResponse('records', $records);
        }
        else{
            return Api::setMessage('No Record Found');
        }
    }
}
