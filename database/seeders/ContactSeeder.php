<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('contacts')->insert([
            'first_name' => 'Adnan',
            'last_name' => 'Khan',
            'user_id'=>1,
            
        ]);
         DB::table('contacts')->insert([
            'first_name' => 'Amimul',
            'last_name' => 'ahsan',
            'user_id'=>2
        ]);
    }
}
