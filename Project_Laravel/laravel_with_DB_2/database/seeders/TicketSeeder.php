<?php
 
namespace Database\Seeders;
 
use App\Models\Ticket;
use Illuminate\Database\Seeder;
 

class TicketSeeder extends Seeder
{

    public function run(): void
    {
        $tickets = [
            [
                'titre'         => 'Problème de connexion utilisateur',
                'description'   => 'Les utilisateurs ne peuvent pas se connecter avec leurs identifiants habituels depuis la mise à jour de ce matin.',
                'priorite'      => 'Haute',
                'statut'        => 'En cours',
                'type'          => 'Facturable',
                'projet_id'     => 2,
                'assigne'       => 'Karim',
            ],
            [
                'titre'         => 'Erreur lors du paiement',
                'description'   => 'Le processus de paiement échoue à l\'étape de confirmation avec une erreur 500.',
                'priorite'      => 'Critique',
                'statut'        => 'Nouveau',
                'type'          => 'Facturable',
                'projet_id'     => 1,
                'assigne'       => 'Léa',
            ],
            [
                'titre'         => 'Demande de remboursement',
                'description'   => 'Ajouter un formulaire de demande de remboursement accessible depuis l\'espace client.',
                'priorite'      => 'Moyenne',
                'statut'        => 'Nouveau',
                'type'          => 'Inclus',
                'projet_id'     => 3,
                'assigne'       => 'Thomas',
            ],
            [
                'titre'         => 'Bug affichage tableau de bord',
                'description'   => 'Les graphiques du tableau de bord ne s\'affichent pas correctement sur mobile.',
                'priorite'      => 'Basse',
                'statut'        => 'En attente',
                'type'          => 'Facturable',
                'projet_id'     => 4,
                'assigne'       => 'Sofia',
            ],
            [
                'titre'         => 'Mot de passe oublié',
                'description'   => 'Le lien de réinitialisation de mot de passe n\'arrive pas dans la boîte mail de l\'utilisateur.',
                'priorite'      => 'Haute',
                'statut'        => 'Résolu',
                'type'          => 'Inclus',
                'projet_id'     => 1,
                'assigne'       => 'Nadia',
            ],
        ];
 
        foreach ($tickets as $ticket) {
            Ticket::create($ticket);
        }

       
    }
}
