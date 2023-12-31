<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Machine;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Machine::create([
            'name' => '01号車',
            'manufacturer_id' => 1,
            'model_number' => '12345',
            'remark' => ''
        ]);

        Machine::create([
            'name' => '02号車',
            'manufacturer_id' => 1,
            'model_number' => '12345',
            'remark' => ''
        ]);

        Machine::create([
            'name' => '03号車',
            'manufacturer_id' => 1,
            'model_number' => '78900',
            'remark' => ''
        ]);

        Machine::create([
            'name' => '04号車',
            'manufacturer_id' => 2,
            'model_number' => '34567',
            'remark' => ''
        ]);

        Machine::create([
            'name' => 'S-01',
            'manufacturer_id' => 3,
            'model_number' => 'S12345',
            'remark' => ''
        ]);

        Machine::create([
            'name' => 'S-02',
            'manufacturer_id' => 3,
            'model_number' => 'S56789',
            'remark' => ''
        ]);

        Machine::create([
            'name' => 'PM-01',
            'manufacturer_id' => 4,
            'model_number' => 'DH12345',
            'remark' => ''
        ]);

        Machine::create([
            'name' => 'PM-02',
            'manufacturer_id' => 4,
            'model_number' => 'H34567',
            'remark' => ''
        ]);

    }
}
