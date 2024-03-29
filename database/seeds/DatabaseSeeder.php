<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ScheduleHeaderSeeder::class);
        $this->call(ScheduleDetailSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(QuestionOptionSeeder::class);
    }
}
