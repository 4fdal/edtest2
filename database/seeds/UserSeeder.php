<?php

use App\User;
use Illuminate\Database\Seeder;
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
        User::create([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make(123456),
            'id_level' => 1,
        ]);

        User::create([
            'name' => 'client',
            'email' => 'client@mail.com',
            'password' => Hash::make(123456),
            'id_level' => 2,
        ]);
    }
}
