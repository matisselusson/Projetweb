<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Myuser;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $collaboratorusers = [
            ['name' => 'Bob',            'email' => 'bob@example.com',      'client_id' => [1]],
            ['name' => 'Clara Petit',    'email' => 'clara@example.com',    'client_id' => [1]],
            ['name' => 'David Bernard',  'email' => 'david@example.com',    'client_id' => [1]],
            ['name' => 'Emma',           'email' => 'emma@example.com',     'client_id' => [2]],
            ['name' => 'François Morel', 'email' => 'francois@example.com', 'client_id' => [2]],
            ['name' => 'Grace Simon',    'email' => 'grace@example.com',    'client_id' => [2]],
            ['name' => 'Hugo',           'email' => 'hugo@example.com',     'client_id' => [1, 2]],
            ['name' => 'Inès Moreau',    'email' => 'ines@example.com',     'client_id' => [1, 2]],
            ['name' => 'Jules Girard',   'email' => 'jules@example.com',    'client_id' => [1, 2]],
            ['name' => 'Noob',           'email' => 'noob@noob',            'client_id' => []],
        ];

        foreach ($collaboratorusers as $userData) {
            $user = User::create([                     
                'name'              => $userData['name'],
                'email'             => $userData['email'],
                'email_verified_at' => now(),
                'password'          => Hash::make('password'),
            ]);

            $myuser = Myuser::create([                 
                'user_id' => $user->id,
                'role'    => 'collaborateur',
            ]);

            if (!empty($userData['client_id'])) {
                $myuser->clients()->attach($userData['client_id']); 
            }
        }

        $user = User::create([
            'name'              => 'Test',
            'email'             => 'test@test',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
        ]);
        Myuser::create([
            'user_id' => $user->id,
            'role'    => 'administrateur',
        ]);


        $user = User::create([
            'name'              => 'azerty',
            'email'             => 'azerty@azerty',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
        ]);
        $myuser = Myuser::create([
            'user_id' => $user->id,
            'role'    => 'client',
        ]);
        $myuser->clients()->attach([1]);


        $user = User::create([
            'name'              => 'qwerty',
            'email'             => 'qwerty@qwerty',
            'email_verified_at' => now(),
            'password'          => Hash::make('password'),
        ]);
        $myuser = Myuser::create([
            'user_id' => $user->id,
            'role'    => 'client',
        ]);
        $myuser->clients()->attach([2]);
    }
}