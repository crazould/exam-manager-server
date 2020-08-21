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
                'password' => 'emilia123', 
                'isAdmin' => true
            ],
            [
                'name' => 'subaru',
                'email' => 'subaru123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'subaru123', 
                'isAdmin' => false
            ],
            [
                'name' => 'satella',
                'email' => 'satella123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'satella123', 
                'isAdmin' => false
            ],
            [
                'name' => 'reinhart',
                'email' => 'reinhart123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'reinhart123', 
                'isAdmin' => false
            ],
            [
                'name' => 'julius',
                'email' => 'julius123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'julius123', 
                'isAdmin' => false
            ],
            [
                'name' => 'wilhem',
                'email' => 'wilhem123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'wilhem123', 
                'isAdmin' => false
            ],
            [
                'name' => 'felix',
                'email' => 'felix123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'felix123', 
                'isAdmin' => false
            ],
            [
                'name' => 'karsten',
                'email' => 'karsten123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'karsten123', 
                'isAdmin' => false
            ],
            [
                'name' => 'garfild',
                'email' => 'garfild123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'garfild123', 
                'isAdmin' => false
            ],
            [
                'name' => 'ryuzu',
                'email' => 'ryuzu123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'ryuzu123', 
                'isAdmin' => false
            ],
            [
                'name' => 'roswalt',
                'email' => 'roswalt123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'roswalt123', 
                'isAdmin' => false
            ]
        ]);

       
        

    }
}
