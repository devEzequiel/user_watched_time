<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channel')->insert([
            'name' => 'History'
        ]);
        DB::table('channel')->insert([
            'name' => 'MTV'
        ]);
        DB::table('channel')->insert([
            'name' => 'SBT'
        ]);
    }
}
