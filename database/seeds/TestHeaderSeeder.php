<?php

use Illuminate\Database\Seeder;

class TestHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('test_headers')->insert([
            [
              'name' => 'Computer Vision', 
            ],
            [
              'name' => 'Human and Computer Interaction', 
            ],
            [
              'name' => 'Web Programming', 
            ]
        ]);
    }
}
