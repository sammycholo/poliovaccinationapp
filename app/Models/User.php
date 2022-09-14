<?php

namespace App\Models;

use App\Helpers\ImageHelper;
use App\Traits\UserMethods;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable, UserMethods;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'cnic',
        'email',
        'api_token',
        'phone',
        'password',
        'city',
        'location',
        'qr_code',
        'code',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function setPasswordAttribute($value){
        $this->attributes['password'] = Hash::make($value);
    }

    public function withToken(){
        return $this->makeVisible(['api_token']);
    }

    public function getQrCodeAttribute($value){
        return asset($value);
    }
    
}
