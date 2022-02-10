<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'adim',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
        ]);

    }
}
