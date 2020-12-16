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
                'questionName' => 'What is computer vision about ?',
                'rightAnswer' => 'Machine Learning'
            ],
            [
                'scheduleID' => 1,
                'questionName' => 'What distinguished computer vision from other AI field ?',
                'rightAnswer' => 'Digital Image Processing'
            ],
            [
                'scheduleID' => 1,
                'questionName' => 'What is AI stand for ?',
                'rightAnswer' => 'Artificial Intelligence'
            ],
            [
                'scheduleID' => 1,
                'questionName' => 'What is common library that is used in computer vision ?',
                'rightAnswer' => 'OpenCV'
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
