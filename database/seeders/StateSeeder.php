<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        State::create([
            'name' => '保管中',
            'remark' => ''
        ]);

        State::create([
            'name' => '整備中',
            'remark' => ''
        ]);

        State::create([
            'name' => 'リース中',
            'remark' => ''
        ]);

        State::create([
            'name' => '故障',
            'remark' => ''
        ]);

        State::create([
            'name' => '廃棄',
            'remark' => ''
        ]);
    }
}
