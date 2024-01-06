<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Machine;
use App\Models\Situation;

class SituationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $number_of_machines = Machine::count();
        for($i=1;$i<=$number_of_machines;$i++){
            Situation::create([
                'machine_id' => $i,
                'state_id' => 1,
                'location_id' => 2,
                'start_date' => '2024-01-06',
                'user_id' => 1,
            ]);
        }
    }
}
