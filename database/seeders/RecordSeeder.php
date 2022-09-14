<?php

namespace Database\Seeders;

use App\Models\Record;
use Illuminate\Database\Seeder;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1;$i<=50;$i++){
            Record::create([
                'name' => 'Record'.$i,
                'worker_id' => 1,
                'phone' =>'12345677'.$i,
                'cnic' => '233445'.$i,
                'vac_status' => true,
                'location' => '32.520'.$i.', 72.358'.$i,

            ]);
        }

        for($i=6;$i<=100;$i++){
            Record::create([
                'name' => 'Record'.$i,
                'worker_id' => 1,
                'phone' =>'12345677'.$i,
                'cnic' => '233445'.$i,
                'vac_status' => false,
                'location' => '31.5204, 74.358'.$i,

            ]);
        }
    }
}
