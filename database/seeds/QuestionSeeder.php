<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'scheduleID' => 1,
                'questionName' => 'what is computer vision about ?',
                'rightAnswer' => 'Machine Learning'
            ],
            [
                'scheduleID' => 2,
                'questionName' => 'is computer graphics use computer ?',
                'rightAnswer' => 'true'
            ],
            [
                'scheduleID' => 3,
                'questionName' => 'Di negara mana bahasa indonesia menjadi bahasa utama ?',
                'rightAnswer' => 'Indonesia'
            ],
            [
                'scheduleID' => 4,
                'questionName' => 'Please Explain about yourself!',
                'rightAnswer' => ''
            ],
            [
                'scheduleID' => 5,
                'questionName' => 'multimedia systems project submission',
                'rightAnswer' => ''
            ],
        ]);
    }
}
