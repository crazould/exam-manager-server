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
                'startTime' => Carbon::create(2020, 4, 3, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 4, 3, 10, 10, 0, 'Asia/Jakarta')
            ],
            [
                'testName' => "Computer Graphics",
                'startTime' => Carbon::create(2020, 4, 5, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 4, 5, 10, 10, 0, 'Asia/Jakarta')
            ],
                        [
                'testName' => "Bahasa Indonesia",
                'startTime' => Carbon::create(2020, 5, 6, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 5, 6, 10, 10, 0, 'Asia/Jakarta')
            ],
                        [
                'testName' => "English Savvy",
                'startTime' => Carbon::create(2020, 6, 7, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 6, 7, 10, 10, 0, 'Asia/Jakarta')
            ],
            [
                'testName' => "Multimedia Systems",
                'startTime' => Carbon::create(2020, 7, 8, 8, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 7, 8, 10, 10, 0, 'Asia/Jakarta')
            ]
        ]);
    }
}
