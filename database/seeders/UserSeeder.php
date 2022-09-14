<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'user',
            'email' => 'user@mail.com',
            'password' => 1234,
            'phone' =>'12345677',
            'city' => 'Lahore',
            'cnic' => '233445',
            'api_token'=>'s2Nd55QWSnb4mNXA7So6wdCBBMB82PlFVflHuRDXEKtsCXEo3YLdC6B00UsB'

        ]);
        for($i=2;$i<=10;$i++){
            User::create([
                'name' => 'user'.$i,
                'email' => 'user'.$i.'@mail.com',
                'password' => 1234,
                'phone' =>'12345677'.$i,
                'city' => 'Lahore',
                'cnic' => '233445'.$i,
                'api_token' => 's2Nd55QWSnb4mNXA7So6wdCBBMB82PlFVflHuRDXEKtsCXEo3YLdCwa4s'.$i
            ]);
        }
    }
}
