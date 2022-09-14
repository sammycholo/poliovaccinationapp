<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=2;$i<=10;$i++){
            Team::create([
                'name' => 'Team'.$i,
          
            ]);
        }
    }
}
