<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Location::create([
            'name' => '現場',
            'address' => '現場による',
            'remark' => ''
        ]);

        Location::create([
            'name' => '本社',
            'address' => '神奈川県横須賀市',
            'remark' => ''
        ]);

        Location::create([
            'name' => '第2工場',
            'address' => '神奈川県横須賀市',
            'remark' => ''
        ]);

        Location::create([
            'name' => '鎌倉',
            'address' => '神奈川県鎌倉市',
            'remark' => ''
        ]);

        Location::create([
            'name' => '新潟支店',
            'address' => '新潟県',
            'remark' => ''
        ]);

        Location::create([
            'name' => '新潟営業所',
            'address' => '新潟県',
            'remark' => ''
        ]);

        Location::create([
            'name' => '山形営業所',
            'address' => '山形県',
            'remark' => ''
        ]);

        Location::create([
            'name' => '高知営業所',
            'address' => '高知県',
            'remark' => ''
        ]);
    }
}
