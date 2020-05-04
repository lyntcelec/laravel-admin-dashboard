<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@icviet.vn',
            'password' => bcrypt('123'),
        ]);
        DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@icviet.vn',
            'password' => bcrypt('123'),
        ]);
    }
}
