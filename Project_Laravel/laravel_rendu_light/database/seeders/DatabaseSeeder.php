<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void {
        $this->call([
            ClientSeeder::class, 
            UserSeeder::class,           
            ProjetSeeder::class,     
            TicketSeeder::class,
            ContractSeeder::class,     
        ]);
    }

}