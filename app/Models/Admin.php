<?php
namespace App\Models;

use App\Helpers\ImageHelper;
use App\Traits\UserMethods;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;


class Admin extends Authenticatable
{
    use HasFactory,Notifiable, UserMethods;
    protected $fillable =[
      'name',
      'password',
      'email',
      'address',
      'area',
      'cnic',
      'phone',
    ];

    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }
}
