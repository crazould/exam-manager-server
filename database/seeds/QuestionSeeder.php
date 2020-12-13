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
                'questionTypeName' => 'multiple',
                'rightAnswer' => 'Machine Learning'
            ],
            [
                'scheduleID' => 2,
                'questionName' => 'is computer graphics use computer ?',
                'questionTypeName' => 'true false',
                'rightAnswer' => 'true'
            ],
            [
                'scheduleID' => 3,
                'questionName' => 'Di negara mana bahasa indonesia menjadi bahasa utama ?',
                'questionTypeName' => 'choose',
                'rightAnswer' => 'Indonesia'
            ],
            [
                'scheduleID' => 4,
                'questionName' => 'Please Explain about yourself!',
                'questionTypeName' => 'essay',
                'rightAnswer' => ''

            ],
            [
                'scheduleID' => 5,
                'questionName' => 'multimedia systems project submission',
                'questionTypeName' => 'file',
                'rightAnswer' => ''
            ],
        ]);
    }
}
