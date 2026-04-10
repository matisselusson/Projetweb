<?php
 
namespace Database\Seeders;
 
use App\Models\Projet;
use Illuminate\Database\Seeder;
 
class ProjetSeeder extends Seeder
{

    public function run(): void
    {
        

        $projets = [
            [
                'titre'       => 'Refonte du site e-commerce',
                'description' => 'Modernisation complète de la plateforme de vente en ligne avec une nouvelle interface utilisateur.',
                'statut'      => 'En cours',
                'client_id'=>1, 
            ],
            [
                'titre'       => 'Application mobile iOS/Android',
                'description' => 'Développement d\'une application mobile cross-platform pour les clients de la société.',
                'statut'      => 'Nouveau',
                'client_id'=>1, 
            ],
            [
                'titre'       => 'Tableau de bord analytique',
                'description' => 'Mise en place d\'un dashboard avec des indicateurs de performance en temps réel.',
                'statut'      => 'En attente',
                'client_id'=>2, 
            ],
            [
                'titre'       => 'Migration base de données',
                'description' => 'Migration de l\'ancienne base de données MySQL vers PostgreSQL avec conservation des données.',
                'statut'      => 'Terminé',
                'client_id'=>1, 
            ],
        ];

        foreach ($projets as $projet) {
            Projet::create($projet);
        }
    }
}
