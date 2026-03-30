<?php
// includes/donnees_projets.php
// Tableau PHP des projets — séparation logique / affichage

$projets = [
    [
        'titre'       => 'Site Web',
        'priorite'    => 'Urgent',
        'statut'      => 'En cours',
        'assigne'     => 'Marie, Alex, Thomas',
        'description' => "éveloppement et amélioration du site web principal de l’entreprise.",
    ],
    [
        'titre'       => 'Optimisation performances serveur',
        'priorite'    => 'Haute',
        'statut'      => 'Nouveau',
        'assigne'     => 'Sophie',
        'description' => "Analyse et optimisation des performances du serveur pour réduire les temps de réponse.",
    ],
    [
        'titre'       => 'Application Mobile',
        'priorite'    => 'Moyenne',
        'statut'      => 'Terminé',
        'assigne'     => 'Julien, Emma',
        'description' => "Création d’une application mobile permettant aux utilisateurs d’accéder aux services depuis leur smartphone.",
    ],
    [
        'titre'       => 'Back-Office',
        'priorite'    => 'Faible',
        'statut'      => 'Validé',
        'assigne'     => 'Lucas',
        'description' => "Développement d’une interface d’administration pour gérer les utilisateurs et les contenus.",
    ],
];



$tickets = [
    [
        'titre'       => 'Erreur page login',
        'priorite'    => 'Haute',
        'statut'      => 'Ouvert',
        'type'        => 'Inclus',
        'projet'      => 'Site Web',
        'assigne'     => 'Marie',
        'description' => "Correction d’une erreur empêchant certains utilisateurs de se connecter.",
    ],
    [
        'titre'       => 'Ajouter bouton Exporter',
        'priorite'    => 'Moyenne',
        'statut'      => 'En cours',
        'type'        => 'Facturable',
        'projet'      => 'Site Web',
        'assigne'     => 'Alex',
        'description' => "Ajout d’un bouton permettant d’exporter les données au format CSV ou Excel.",
    ],
    [
        'titre'       => 'Crash au démarrage (Android)',
        'priorite'    => 'Critique',
        'statut'      => 'En cours',
        'type'        => 'Inclus',
        'projet'      => 'Application Mobile',
        'assigne'     => 'Sofia',
        'description' => "Correction d’un crash qui survient au lancement de l’application sur Android.",
    ],
    [
        'titre'       => 'Mode sombre pour iOS',
        'priorite'    => 'Faible',
        'statut'      => 'En revue',
        'type'        => 'Facturable',
        'projet'      => 'Application Mobile',
        'assigne'     => 'Yanis',
        'description' => "Ajout d’un thème sombre pour améliorer le confort visuel des utilisateurs sur iOS.",
    ],
    [
        'titre'       => 'Pagination sur /v2/users',
        'priorite'    => 'Moyenne',
        'statut'      => 'Ouvert',
        'type'        => 'Inclus',
        'projet'      => 'API',
        'assigne'     => 'Claire',
        'description' => "Implémentation d’un système de pagination pour limiter le nombre de résultats retournés par l’API.",
    ],
    [
        'titre'       => 'Erreur 500 sur /auth/refresh',
        'priorite'    => 'Haute',
        'statut'      => 'Résolu',
        'type'        => 'Facturable',
        'projet'      => 'API',
        'assigne'     => 'Rayan',
        'description' => "Correction d’une erreur serveur lors du rafraîchissement du token d’authentification.",
    ],
    [
        'titre'       => 'Gestion avancée des rôles',
        'priorite'    => 'Haute',
        'statut'      => 'En cours',
        'type'        => 'Facturable',
        'projet'      => 'Back-Office',
        'assigne'     => 'Lucie',
        'description' => "Ajout d’un système avancé de gestion des rôles et permissions dans l’interface admin.",
    ],
    [
        'titre'       => 'Optimiser les performances du tableau',
        'priorite'    => 'Faible',
        'statut'      => 'Ouvert',
        'type'        => 'Inclus',
        'projet'      => 'Back-Office',
        'assigne'     => 'Omar',
        'description' => "Amélioration du chargement et de l’affichage des tableaux dans le back-office.",
    ],
];