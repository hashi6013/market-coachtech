<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConditionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'condition' => '不良',
        ];
        DB::table('conditions')->insert($param);
        $param = [
            'condition' => 'やや不良',
        ];
        DB::table('conditions')->insert($param);
        $param = [
            'condition' => '普通',
        ];
        DB::table('conditions')->insert($param);
        $param = [
            'condition' => 'やや良好',
        ];
        DB::table('conditions')->insert($param);
        $param = [
            'condition' => '良好',
        ];
        DB::table('conditions')->insert($param);
        $param = [
            'condition' => '新品・未使用',
        ];
        DB::table('conditions')->insert($param);
    }
}