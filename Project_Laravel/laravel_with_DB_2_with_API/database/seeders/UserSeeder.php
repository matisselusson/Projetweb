<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['name' => 'Test_test',   'email' => 'test@test'],
            ['name' => 'Azerty',   'email' => 'azerty@azerty'],
            ['name' => 'Bob Dupont',     'email' => 'bob@example.com'],
            ['name' => 'Clara Petit',    'email' => 'clara@example.com'],
            ['name' => 'David Bernard',  'email' => 'david@example.com'],
            ['name' => 'Emma Leroy',     'email' => 'emma@example.com'],
            ['name' => 'François Morel', 'email' => 'francois@example.com'],
            ['name' => 'Grace Simon',    'email' => 'grace@example.com'],
            ['name' => 'Hugo Laurent',   'email' => 'hugo@example.com'],
            ['name' => 'Inès Moreau',    'email' => 'ines@example.com'],
            ['name' => 'Jules Girard',   'email' => 'jules@example.com'],
        ];

        foreach ($users as $user) {
            User::create([
                'name'              => $user['name'],
                'email'             => $user['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
            ]);
        }
    }
}