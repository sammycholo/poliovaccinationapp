<?php

namespace App\Models;

use App\Traits\UserMethods;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Worker extends Authenticatable
{
    use HasFactory, Notifiable, UserMethods;
    
    protected $fillable =[
        'team_id',
        'name',
        'cnic',
        'phone',
        'email',
        'password',
        'address',
        'api_token',
        'area',
        'location'
    ];

}
