<?php

use Illuminate\Database\Seeder;

class ScheduleDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule_details')->insert([
            [
                'scheduleID' => 1,
                'userID' => 2,
                'answerStatus' => 'no file'
            ],
            [
                'scheduleID' => 1,
                'userID' => 3,
                'answerStatus' => 'no file'
            ],
            [
                'scheduleID' => 1,
                'userID' => 4,
                'answerStatus' => 'no file'
            ],
            [
                'scheduleID' => 2,
                'userID' => 2,
                'answerStatus' => 'submitted'
            ],
            [
                'scheduleID' => 2,
                'userID' => 3,
                'answerStatus' => 'submitted'
            ],
            [
                'scheduleID' => 3,
                'userID' => 4,
                'answerStatus' => 'finalized'
            ],
            [
                'scheduleID' => 4,
                'userID' => 5,
                'answerStatus' => 'not yet graded'
            ],
            [
                'scheduleID' => 4,
                'userID' => 6,
                'answerStatus' => 'not yet graded'
            ],
            [
                'scheduleID' => 5,
                'userID' => 3,
                'answerStatus' => 'not yet graded'
            ],
        ]);
    }
}
