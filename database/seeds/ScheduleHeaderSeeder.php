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
                'testName' => "Computer Vision",
                'startTime' => Carbon::create(2021, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2021, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ],
            [
                'testName' => "Computer Graphics",
                'startTime' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ],
            [
                'testName' => "Computer Science",
                'startTime' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ]
        ]);
    }
}
