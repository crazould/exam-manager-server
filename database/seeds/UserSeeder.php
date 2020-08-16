<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'emilia',
                'email' => 'emilia123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'emilia123'
            ],
            [
                'name' => 'subaru',
                'email' => 'subaru123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'subaru123'
            ],
            [
                'name' => 'roswalt',
                'email' => 'roswalt123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'roswalt123'
            ]
        ]);

       
        

    }
}
