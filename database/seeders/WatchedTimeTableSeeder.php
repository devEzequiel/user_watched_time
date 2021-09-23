<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchedTimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 1,
            'minutes' => 100.0,
            'date' => Carbon::create('2021', '01', '01', '0', '0', '0')
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 1,
            'minutes' => 180.0,
            'date' => Carbon::create('2021', '01', '02', '0', '0', '0')
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 1,
            'minutes' => 150.0,
            'date' => Carbon::create('2021', '01', '03', '0', '0', '0')
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 1,
            'minutes' => 110.0,
            'date' => Carbon::create('2021', '01', '04', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 2,
            'channel_id' => 1,
            'minutes' => 110.0,
            'date' => Carbon::create('2021', '01', '04', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 2,
            'channel_id' => 1,
            'minutes' => 140.0,
            'date' => Carbon::create('2021', '01', '05', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 2,
            'channel_id' => 1,
            'minutes' => 190.0,
            'date' => Carbon::create('2021', '01', '06', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 3,
            'channel_id' => 1,
            'minutes' => 170.0,
            'date' => Carbon::create('2021', '01', '01', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 3,
            'channel_id' => 1,
            'minutes' => 120.0,
            'date' => Carbon::create('2021', '01', '02', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 3,
            'channel_id' => 1,
            'minutes' => 130.0,
            'date' => Carbon::create('2021', '01', '03', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 2,
            'minutes' => 130.0,
            'date' => Carbon::create('2021', '01', '03', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 2,
            'channel_id' => 2,
            'minutes' => 130.0,
            'date' => Carbon::create('2021', '01', '03', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 3,
            'channel_id' => 2,
            'minutes' => 125.0,
            'date' => Carbon::create('2021', '01', '03', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 2,
            'minutes' => 110.0,
            'date' => Carbon::create('2021', '01', '05', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 1,
            'channel_id' => 2,
            'minutes' => 100.0,
            'date' => Carbon::create('2021', '01', '01', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 2,
            'channel_id' => 2,
            'minutes' => 120.0,
            'date' => Carbon::create('2021', '01', '01', '0', '0', '0'),
        ]);
        DB::table('watched_time')->insert([
            'user_id' => 3,
            'channel_id' => 2,
            'minutes' => 120.0,
            'date' => Carbon::create('2021', '01', '01', '0', '0', '0'),
        ]);
    }
}
