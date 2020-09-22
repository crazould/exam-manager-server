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
                'answerStatus' => 'not done'
            ],
            [
                'scheduleID' => 1,
                'userID' => 3,
                'answerStatus' => 'not done'
            ],
            [
                'scheduleID' => 1,
                'userID' => 4,
                'answerStatus' => 'not done'
            ],
            [
                'scheduleID' => 2,
                'userID' => 2,
                'answerStatus' => 'submited'
            ],
            [
                'scheduleID' => 2,
                'userID' => 3,
                'answerStatus' => 'submited'
            ],
            [
                'scheduleID' => 3,
                'userID' => 2,
                'answerStatus' => 'finalized'
            ],
        ]);
    }
}
