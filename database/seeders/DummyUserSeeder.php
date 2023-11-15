<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use app\Models\User;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=> 'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=> 'Provider',
                'email'=>'provider@gmail.com',
                'role'=>'provider',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=> 'User',
                'email'=>'user@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach( $userData as $key => $val ) {
            User::create($val);
    }
}
}
