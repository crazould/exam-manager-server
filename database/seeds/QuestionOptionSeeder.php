<?php

use Illuminate\Database\Seeder;

class QuestionOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::table('question_options')->insert([
            [
                'questionID' => 1,
                'optionName' => 'Machine Learning'
            ],
            [
                'questionID' => 1,
                'optionName' => 'Web'
            ],
            [
                'questionID' => 1,
                'optionName' => 'User Experience'
            ],
            [
                'questionID' => 1,
                'optionName' => 'Food'
            ],
            [
                'questionID' => 2,
                'optionName' => 'Audio Processing'
            ],
            [
                'questionID' => 2,
                'optionName' => 'Digital Image Processing'
            ],
            [
                'questionID' => 2,
                'optionName' => 'Big Data processing'
            ],
            [
                'questionID' => 2,
                'optionName' => 'Small Data processing'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Ancestor Interest'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Another Insect'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Artificial Intelligence'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Alive Intergalactic'
            ],
            [
                'questionID' => 4,
                'optionName' => 'stdio.h'
            ],
            [
                'questionID' => 4,
                'optionName' => 'Bootstrap'
            ],
            [
                'questionID' => 4,
                'optionName' => 'Jquery'
            ],
            [
                'questionID' => 4,
                'optionName' => 'OpenCV'
            ],
            [
                'questionID' => 10,
                'optionName' => 'Amerika'
            ],
            [
                'questionID' => 10,
                'optionName' => 'Belanda'
            ],
            [
                'questionID' => 10,
                'optionName' => 'Jepang'
            ],
            [
                'questionID' => 10,
                'optionName' => 'Indonesia'
            ],
            [
                'questionID' => 10,
                'optionName' => 'Swedia'
            ],
            [
                'questionID' => 11,
                'optionName' => 'Austronesia'
            ],
            [
                'questionID' => 11,
                'optionName' => 'Melayu'
            ],
            [
                'questionID' => 11,
                'optionName' => 'Austrik'
            ],
            [
                'questionID' => 11,
                'optionName' => 'Austro-Asiatik'
            ],
            [
                'questionID' => 11,
                'optionName' => 'jawa'
            ],
            [
                'questionID' => 11,
                'optionName' => 'sunda'
            ],
            [
                'questionID' => 11,
                'optionName' => 'batak'
            ],
            [
                'questionID' => 12,
                'optionName' => 'Setelah Sumpah Pemuda'
            ],
            [
                'questionID' => 12,
                'optionName' => 'Setelah Hari Pancasila'
            ],
            [
                'questionID' => 12,
                'optionName' => 'Setelah Proklamasi Kemerdekaan Indonesia'
            ],
        ]);
    }
}
