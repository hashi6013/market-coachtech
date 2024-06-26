<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'メンズ',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'レディース',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => 'ユニセックス',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '洋服',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '書籍',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '家具',
        ];
        DB::table('categories')->insert($param);
        $param = [
            'name' => '音楽',
        ];
        DB::table('categories')->insert($param);
    }
}