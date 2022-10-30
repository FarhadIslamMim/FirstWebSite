<?php

namespace Database\Seeders;

use App\Models\User;
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
        User::insert([
            [
                'name' => 'Mim',
                'username' => 'Mim',
                'email' => 'mim@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'email_verified_at' => now(),
            ],
            [
                'name' => 'Farhad Islam Mim',
                'username' => 'Farhad',
                'email' => 'farhad@gmail.com',
                'password' => Hash::make('12345678'),
                'created_at' => now(),
                'email_verified_at' => now(),
            ]
        ]);
    }
}
