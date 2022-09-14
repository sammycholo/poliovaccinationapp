<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=10;$i++){
            Admin::create([
                'name' => 'admin'.$i,
                'email' => 'admin'.$i.'@mail.com',
                'password' => 1234,
                'phone' =>'12345677'.$i,
                'address' => 'main sgd'.$i,
                'area' => 'dfdfdfdfd'.$i,
                'cnic' => '233445'.$i,
                // 'api_token'=>'s2Nd55QWSnb4mNXA7So6wdCBBMB82PlFVflHuRDXEKtsCXEo3YLdC6B00wer'
    
            ]);
        }
    }
}
