<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Creat multiple user
        $user = [
            [
                'name' => 'Ama',
                'phone' => '089506787553',
                'email' => 'amares@gmail.com',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Usern',
                'phone' => '0895067877676',
                'email' => 'katies@gmail.com',
                'password' => bcrypt('dinokuoyen1'),
            ],
            [
                'name' => 'Usern',
                'phone' => '08950656373829',
                'email' => 'titaamalia544@gmail.com',
                'password' => bcrypt('12345678'),
            ],
        ];

        //Insert the user into the database
        DB::table('users')->insert($user);
    }
}
