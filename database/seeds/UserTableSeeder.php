<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        User::create([
            'name' => 'Super Administrator',
            'username' => 'super',
            'password' => 'super',
            'email' => 'super@example.com'
        ]);

        User::create([
            'name' => 'Administrator',
            'username' => 'admin',
            'password' => 'admin',
            'email' => 'admin@example.com'
        ]);
    }
}
