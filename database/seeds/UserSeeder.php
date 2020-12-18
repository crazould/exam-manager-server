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
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => 'admin',
                'isAdmin' => true
            ],
            [
                'username' => 'student2',
                'email' => 'student2@gmail.com',
                'email_verified_at' => now(),
                'password' => 'student2',
                'isAdmin' => false
            ],
            [
                'username' => 'student',
                'email' => 'student@gmail.com',
                'email_verified_at' => now(),
                'password' => 'student',
                'isAdmin' => false
            ],
            [
                'username' => 'reinhart',
                'email' => 'reinhart123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'reinhart123',
                'isAdmin' => false
            ],
            [
                'username' => 'julius',
                'email' => 'julius123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'julius123',
                'isAdmin' => false
            ],
            [
                'username' => 'wilhem',
                'email' => 'wilhem123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'wilhem123',
                'isAdmin' => false
            ],
            [
                'username' => 'felix',
                'email' => 'felix123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'felix123',
                'isAdmin' => false
            ],
            [
                'username' => 'karsten',
                'email' => 'karsten123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'karsten123',
                'isAdmin' => false
            ],
            [
                'username' => 'garfild',
                'email' => 'garfild123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'garfild123',
                'isAdmin' => false
            ],
            [
                'username' => 'ryuzu',
                'email' => 'ryuzu123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'ryuzu123',
                'isAdmin' => false
            ],
            [
                'username' => 'roswalt',
                'email' => 'roswalt123@gmail.com',
                'email_verified_at' => now(),
                'password' => 'roswalt123',
                'isAdmin' => false
            ]
        ]);
    }
}
