<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('users')->insert([
            'first_name' => 'Adnan',
            'last_name' => 'Khan',
            'email'=>'user@gmail.com',
            'role'=>'User',
            'password' => Hash::make('password'),
        ]);
        // DB::table('users')->insert([
        //     'first_name' => 'Amimul',
        //     'last_name' => 'ahsan',
        //     'email'=>'amimul@gmail.com',
        //     'role'=>'Staff',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
