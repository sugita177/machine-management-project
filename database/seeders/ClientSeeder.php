<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::create([
            'name' => '鹿島建設株式会社',
            'remark' => ''
        ]);

        Client::create([
            'name' => '前田建設工業株式会社',
            'remark' => ''
        ]);

        Client::create([
            'name' => '清水建設株式会社',
            'remark' => ''
        ]);

        Client::create([
            'name' => '株式会社大林組',
            'remark' => ''
        ]);

        Client::create([
            'name' => '五洋建設株式会社',
            'remark' => ''
        ]);

        Client::create([
            'name' => '株式会社熊谷組',
            'remark' => ''
        ]);
    }
}
