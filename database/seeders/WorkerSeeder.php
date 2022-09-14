<?php

namespace Database\Seeders;

use App\Models\Worker;
use Illuminate\Database\Seeder;

class WorkerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Worker::create([
            'name' => 'worker',
            'email' => 'worker@mail.com',
            'password' => 1234,
            'cnic' => '35489662545',
            'phone' => '123456789',
            'address' => "address",
            'area' => "area",
            'api_token' => 's2Nd55QWSnb4mNXA7So6wdCBBMB82PlFVflHuRDXEKtsCXEo3YLdC6B00ig',
            'location' => '31.5204, 74.3587',
        ]);
        for($i=1;$i<=150;$i++){
            Worker::create([
                'name' => 'worker'.$i,
                'email' => 'worker'.$i.'@mail.com',
                'password' => 1234,
                'cnic' => '3548966250'.$i,
                'phone' => '123456789',
                'address' => "address",
                'area' => "area",
                'api_token' => 's2Nd55QWSnb4mNXA7So6wdCBBMB82PlFVflHuRDXEKtsCXEo3YLdC6B00i'.$i,
                'location' => '31.5204, 74.3587',
            ]);
        }
    }
}
