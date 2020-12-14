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
                'answerStatus' => 'submitted',
                'score' => 100
            ],
            [
                'scheduleID' => 1,
                'userID' => 3,
                'answerStatus' => 'submitted',
                'score' => 75
            ],
            [
                'scheduleID' => 1,
                'userID' => 4,
                'answerStatus' => 'submitted',
                'score' => 95
            ],
            [
                'scheduleID' => 2,
                'userID' => 2,
                'answerStatus' => 'no file',
                'score' => 0
            ],
            [
                'scheduleID' => 2,
                'userID' => 3,
                'answerStatus' => 'submitted',
                'score' => 85
            ],
            [
                'scheduleID' => 3,
                'userID' => 4,
                'answerStatus' => 'finalized',
                'score' => 30
            ],
            [
                'scheduleID' => 4,
                'userID' => 5,
                'answerStatus' => 'not yet graded',
                'score' => 0
            ],
            [
                'scheduleID' => 4,
                'userID' => 6,
                'answerStatus' => 'not yet graded',
                'score' => 0
            ],
            [
                'scheduleID' => 5,
                'userID' => 3,
                'answerStatus' => 'not yet graded',
                'score' => 0
            ],
        ]);
    }
}
