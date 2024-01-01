<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Site;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            'name' => '〇〇トンネル',
            'address' => '東京都八王子市〇〇',
            'client_id' => 1,
            'start_date' => '2023-04-01',
            'end_date' => '2023-11-30',
            'remark' => ''
        ]);

        Site::create([
            'name' => '××市共同溝',
            'address' => '神奈川県横浜市都筑区××',
            'client_id' => 2,
            'start_date' => '2023-06-11',
            'end_date' => '2023-12-21',
            'remark' => ''
        ]);

        Site::create([
            'name' => '△△鉄道トンネル',
            'address' => '千葉県千葉市美浜区△△',
            'client_id' => 5,
            'start_date' => '2023-07-01',
            'end_date' => '2024-04-07',
            'remark' => ''
        ]);

        Site::create([
            'name' => '中央道□□トンネル',
            'address' => '山梨県甲府市□□',
            'client_id' => 6,
            'start_date' => '2023-07-15',
            'end_date' => '2024-06-10',
            'remark' => ''
        ]);
        
    }
}
