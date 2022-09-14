<?php

namespace App\Http\Controllers\Api\Worker;

use App\Helpers\Api;
use App\Http\Controllers\Controller;
use App\Models\Record;
use Carbon\Carbon;
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
        'Phone: '.$request->phone.'Vaccination Status: '.$request->vac_status, $file, $ecc, $pixel_size, $frame_size);

        $record = Record::create(['worker_id'=>Auth::user()->id,'qr_code'=>$path]+$request->all());
        return Api::setResponse('record', $record);
    }

    public function VacStatus(Request $request){
        $record = Record::where('cnic', $request->cnic)->first();
        if($record){
            $record->update(['vac_status'=>$request->vac_status,'vac_date'=>Carbon::now()]);
            $ecc = 'H';
            $pixel_size = 20;
            $frame_size = 5;
            $path = '/qrcode/'.rand(1, 1000) . ".png";
            $file = public_path(). $path;
            $qr = QRcode::png('Name: '.$record->name.'CNIC: '.$record->cnic.
            'Phone: '.$record->phone.'Vaccination Status: '.$record->vac_status, $file, $ecc, $pixel_size, $frame_size);
            $record->update(['qr_code'=>$path]);
            return Api::setResponse('record', $record);
            }
            else{
            return Api::setMessage('Please Enter Record First' );
            }
    }

            
    public function getRecords(){
        $records= Record::all();
        return Api::setResponse('records', $records);
    }
}
