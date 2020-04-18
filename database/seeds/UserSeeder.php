<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert(
            [
                'name' => 'Matthew Snelgar',
                'email' => 'snelgarm@gmail.com',
                'password' => bcrypt('Baxter123'),
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'Karlie Snelgar',
                'email' => 'karliefit@outlook.com',
                'password' => bcrypt('Tigerlily123'),
            ]
        );
        DB::table('users')->insert(
            [
                'name' => 'John Doe',
                'email' => 'johndoe@outlook.com',
                'password' => bcrypt('password'),
            ]
        );
    }
}
