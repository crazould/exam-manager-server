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
                'startTime' => Carbon::create(2020, 12, 19, 2, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 9, 10, 0, 'Asia/Jakarta'),
                'testType' => 'multiple'
            ],
            [
                'testName' => "Computer Graphics",
                'startTime' => Carbon::create(2020, 12, 19, 2, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 9, 10, 0, 'Asia/Jakarta'),
                'testType' => 'true false'
            ],
            [
                'testName' => "Bahasa Indonesia",
                'startTime' => Carbon::create(2020, 12, 19, 2, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 9, 10, 0, 'Asia/Jakarta'),
                'testType' => 'choose'
            ],
            [
                'testName' => "English Savvy",
                'startTime' => Carbon::create(2020, 12, 19, 2, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 9, 10, 0, 'Asia/Jakarta'),
                'testType' => 'essay'
            ],
            [
                'testName' => "Multimedia Systems",
                'startTime' => Carbon::create(2020, 12, 19, 2, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 9, 10, 0, 'Asia/Jakarta'),
                'testType' => 'file'
            ],
            [
                'testName' => "Digital Marketing",
                'startTime' => Carbon::create(2020, 12, 19, 1, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 2, 10, 0, 'Asia/Jakarta'),
                'testType' => 'file'
            ],
            [
                'testName' => "User Experience",
                'startTime' => Carbon::create(2020, 12, 19, 5, 0, 0, 'Asia/Jakarta'),
                'endTime' => Carbon::create(2020, 12, 19, 6, 10, 0, 'Asia/Jakarta'),
                'testType' => 'file'
            ]
        ]);
    }
}
