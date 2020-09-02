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
                'schedule_id' => 1,
                'user_id' => 2,
                'answer_status' => 'not done'
            ],
            [
                'schedule_id' => 1,
                'user_id' => 3,
                'answer_status' => 'not done'
            ],
            [
                'schedule_id' => 1,
                'user_id' => 4,
                'answer_status' => 'not done'
            ],
            [
                'schedule_id' => 2,
                'user_id' => 2,
                'answer_status' => 'submited'
            ],
            [
                'schedule_id' => 2,
                'user_id' => 3,
                'answer_status' => 'submited'
            ],
            [
                'schedule_id' => 3,
                'user_id' => 2,
                'answer_status' => 'finalized'
            ],
        ]);
    }
}
