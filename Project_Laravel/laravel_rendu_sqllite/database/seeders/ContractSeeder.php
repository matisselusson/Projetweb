<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contract;
use App\Models\Projet;

class ContractSeeder extends Seeder
{
    public function run(): void
    {
        $projets = Projet::all();

        if ($projets->isEmpty()) {
            $this->command->warn('Aucun projet trouvé. Lance ProjetSeeder d\'abord.');
            return;
        }

        $templates = [
            ['projet_id' => 1,'hours_included' => 40,  'hourly_rate' => 75.00,  'start_date' => '2024-01-01', 'end_date' => '2024-03-31'],
            ['projet_id' => 2,'hours_included' => 80,  'hourly_rate' => 90.00,  'start_date' => '2024-02-01', 'end_date' => '2024-07-31'],
            ['projet_id' => 3,'hours_included' => 20,  'hourly_rate' => 60.00,  'start_date' => '2024-03-15', 'end_date' => '2024-04-15'],
            ['projet_id' => 4,'hours_included' => 160, 'hourly_rate' => 110.00, 'start_date' => '2024-01-15', 'end_date' => '2024-12-31'],
        ];

        foreach ($templates as $data) {
            Contract::create([
                'projet_id'      => $data['projet_id'],
                'hours_included' => $data['hours_included'],
                'hourly_rate'    => $data['hourly_rate'],
                'start_date'     => $data['start_date'],
                'end_date'       => $data['end_date'],
            ]);
        }

    }
}