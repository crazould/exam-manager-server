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
                'questionID' => 3,
                'optionName' => 'Amerika'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Belanda'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Jepang'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Indonesia'
            ],
            [
                'questionID' => 3,
                'optionName' => 'Swedia'
            ],
        ]);
    }
}
