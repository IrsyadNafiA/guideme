<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class Iniseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user =[
            [
            'name' => 'ini adalah admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'level' => 'admin',
            ],

            [
            'name' => 'ini adalah user',
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123'),
            'level' => 'user',
            ],
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
