<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserData extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Administrator',
                'username' => 'admin',
                'password' => bcrypt('123456'),
                'level' => 1,
                'email' => 'roman@gmail.com'
            ],
            [
                'name' => 'Pengguna',
                'username' => 'pengguna',
                'password' => bcrypt('123456'),
                'level' => 2,
                'email' => 'corleone@gmail.com'
            ],
            [
                'name' => 'Vava',
                'username' => 'vava',
                'password' => bcrypt('123456'),
                'level' => 0,
                'email' => 'vava@gmail.com'
            ],
        ];

        foreach($user as $key => $value){
            User::create($value);
        }
    }
}