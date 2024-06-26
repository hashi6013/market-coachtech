<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'ユーザー太郎',
            'email' => 'taro@user.com',
            'password' => bcrypt('taro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー次郎',
            'email' => 'ziro@user.com',
            'password' => bcrypt('ziro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー三郎',
            'email' => 'saburo@user.com',
            'password' => bcrypt('saburo12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー四郎',
            'email' => 'shiro@user.com',
            'password' => bcrypt('shiro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー五郎',
            'email' => 'goro@user.com',
            'password' => bcrypt('goro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー六郎',
            'email' => 'rokuro@user.com',
            'password' => bcrypt('rokuro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー七郎',
            'email' => 'nanaro@user.com',
            'password' => bcrypt('nanaro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー八郎',
            'email' => 'hachi@user.com',
            'password' => bcrypt('hachiro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー九郎',
            'email' => 'kyuro@user.com',
            'password' => bcrypt('kyuro12345'),
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'ユーザー十郎',
            'email' => 'juro@user.com',
            'password' => bcrypt('juro12345'),
        ];
        DB::table('users')->insert($param);
    }
}
