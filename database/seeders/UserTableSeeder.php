<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'name' => 'Brian'
        ]);
        DB::table('user')->insert([
            'name' => 'Bruno'
        ]);
        DB::table('user')->insert([
            'name' => 'Otavio'
        ]);
    }
}
