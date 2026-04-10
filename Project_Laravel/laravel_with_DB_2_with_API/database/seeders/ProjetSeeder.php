<?php
 
namespace Database\Seeders;
 
use App\Models\Projet;
use Illuminate\Database\Seeder;
 
class ProjetSeeder extends Seeder
{
    /**
     * Seed the application's database with sample tickets.
     */
    public function run(): void
    {
        

        $projets = [
            [
                'titre'       => 'Refonte du site e-commerce',
                'description' => 'Modernisation complète de la plateforme de vente en ligne avec une nouvelle interface utilisateur.',
                'priorite'    => 'Haute',
                'statut'      => 'En cours',
                'assigne'     => 'Thomas',
            ],
            [
                'titre'       => 'Application mobile iOS/Android',
                'description' => 'Développement d\'une application mobile cross-platform pour les clients de la société.',
                'priorite'    => 'Critique',
                'statut'      => 'Nouveau',
                'assigne'     => 'Léa',
            ],
            [
                'titre'       => 'Tableau de bord analytique',
                'description' => 'Mise en place d\'un dashboard avec des indicateurs de performance en temps réel.',
                'priorite'    => 'Moyenne',
                'statut'      => 'En attente',
                'assigne'     => 'Karim',
            ],
            [
                'titre'       => 'Migration base de données',
                'description' => 'Migration de l\'ancienne base de données MySQL vers PostgreSQL avec conservation des données.',
                'priorite'    => 'Haute',
                'statut'      => 'Résolu',
                'assigne'     => 'Sofia',
            ],
        ];

        foreach ($projets as $projet) {
            Projet::create($projet);
        }
    }
}
