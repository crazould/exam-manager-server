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
                'questionName' => 'Is computer graphics use computer for research ?',
                'rightAnswer' => 'true'
            ],
            [
                'scheduleID' => 2,
                'questionName' => 'Is computer graphics is the branch of Computer Science ?',
                'rightAnswer' => 'true'
            ],
            [
                'scheduleID' => 2,
                'questionName' => 'Is computer graphics not use computer for research ?',
                'rightAnswer' => 'false'
            ],
            [
                'scheduleID' => 2,
                'questionName' => 'Is computer graphics is the branch of Artificial Intelligence ?',
                'rightAnswer' => 'false'
            ],
            [
                'scheduleID' => 2,
                'questionName' => 'Is Computer graphics deals with generating images ?',
                'rightAnswer' => 'true'
            ],
            [
                'scheduleID' => 3,
                'questionName' => 'Di negara mana bahasa indonesia menjadi bahasa utama ?',
                'rightAnswer' => 'Indonesia'
            ],
            [
                'scheduleID' => 3,
                'questionName' => 'Bahasa Indonesia adalah salah satu dari banyak varietas bahasa ?',
                'rightAnswer' => 'Melayu'
            ],
            [
                'scheduleID' => 3,
                'questionName' => 'Kapan Bahasa Indonesia diresmikan penggunaannya ?',
                'rightAnswer' => 'Setelah Proklamasi Kemerdekaan Indonesia'
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
