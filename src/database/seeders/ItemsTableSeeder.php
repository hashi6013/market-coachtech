<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => '1',
            'condition_id' => '1',
            'name' => 'HTML教材',
            'price' => '2000',
            'description' => 'とても分かりやすい教材です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '2',
            'condition_id' => '2',
            'name' => 'JavaScript教材',
            'price' => '1500',
            'description' => 'とても分かりやすい教材です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '3',
            'condition_id' => '3',
            'name' => 'Tシャツ',
            'price' => '2500',
            'description' => '新品同様です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '4',
            'condition_id' => '4',
            'name' => 'シューズ',
            'price' => '6000',
            'description' => 'ほぼ新品です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '5',
            'condition_id' => '5',
            'name' => '財布',
            'price' => '10000',
            'description' => '一度も使ってません。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '6',
            'condition_id' => '6',
            'name' => '大容量バッグ',
            'price' => '8000',
            'description' => '大容量です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '7',
            'condition_id' => '1',
            'name' => 'PHP教材',
            'price' => '2000',
            'description' => '難しい教材です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '8',
            'condition_id' => '2',
            'name' => 'CSS教材',
            'price' => '2000',
            'description' => 'とても分かりやすい教材です。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '9',
            'condition_id' => '3',
            'name' => '子供用の服',
            'price' => '2000',
            'description' => 'やや汚れあり。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
        $param = [
            'user_id' => '10',
            'condition_id' => '4',
            'name' => 'ブーツ',
            'price' => '5000',
            'description' => 'やや色落ちしています。',
            'image_url' => 'images/market-noimage.png',
        ];
        DB::table('items')->insert($param);
    }
}
