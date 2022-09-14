<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = ['worker_id','user_id','name','phone','cnic','location','vac_status','qr_code'];

    
    public function getQrCodeAttribute($value){
        return asset($value);
    }

}
