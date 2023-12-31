<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Manufacturer::create([
            'name' => '極東',
            'remark' => ''
        ]);

        Manufacturer::create([
            'name' => 'IHI',
            'remark' => ''
        ]);

        Manufacturer::create([
            'name' => 'シンテック',
            'remark' => ''
        ]);

        Manufacturer::create([
            'name' => 'プッツマイスター',
            'remark' => ''
        ]);
    }
}
