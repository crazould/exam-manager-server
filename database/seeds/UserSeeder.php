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
                'is_admin' => true
            ],
            [
                'name' => 'subaru',
                'email' => 'subaru123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'subaru123', 
                'is_admin' => false
            ],
            [
                'name' => 'satella',
                'email' => 'satella123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'satella123', 
                'is_admin' => false
            ],
            [
                'name' => 'reinhart',
                'email' => 'reinhart123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'reinhart123', 
                'is_admin' => false
            ],
            [
                'name' => 'julius',
                'email' => 'julius123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'julius123', 
                'is_admin' => false
            ],
            [
                'name' => 'wilhem',
                'email' => 'wilhem123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'wilhem123', 
                'is_admin' => false
            ],
            [
                'name' => 'felix',
                'email' => 'felix123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'felix123', 
                'is_admin' => false
            ],
            [
                'name' => 'karsten',
                'email' => 'karsten123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'karsten123', 
                'is_admin' => false
            ],
            [
                'name' => 'garfild',
                'email' => 'garfild123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'garfild123', 
                'is_admin' => false
            ],
            [
                'name' => 'ryuzu',
                'email' => 'ryuzu123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'ryuzu123', 
                'is_admin' => false
            ],
            [
                'name' => 'roswalt',
                'email' => 'roswalt123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'roswalt123', 
                'is_admin' => false
            ]
        ]);

       
        

    }
}
