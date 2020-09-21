<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ScheduleHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule_headers')->insert([
            [
                'test_id' => 1,
                // 'start_time' => Carbon::create(2021, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                // 'end_time' => Carbon::create(2021, 4, 3, 10, 10, 0, 'Asia/Jakarta')
                'start_time' => Carbon::create(2021, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'end_time' => Carbon::create(2021, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ],
            [
                'test_id' => 2,
                // 'start_time' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                // 'end_time' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
                'start_time' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'end_time' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ],
            [
                'test_id' => 3,
                // 'start_time' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                // 'end_time' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
                'start_time' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'end_time' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ]
        ]);
    }
}
