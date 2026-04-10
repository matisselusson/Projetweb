<?php





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $erreurs_ticket = 0;
    // récupération form ticket avec vérification si null
    $titre = trim($_POST['titre']    ?? '');
    $description = trim($_POST['description'] ?? '');
    $statut = trim($_POST['statut']   ?? '');
    $priorite = trim($_POST['priorite'] ?? '');
    $assigne = trim($_POST['assigne']  ?? '');


    if (strlen($titre) < 3) {
        $erreurs_ticket++;
    }
    if (strlen($description) < 10) {
        $erreurs_ticket++;
    }
    if (strlen($assigne) < 1) {
        $erreurs_ticket++;
    }

    if (!$erreurs_ticket) {
        $nouveau_projet = [
            'titre'    => $titre,
            'description' => $description,
            'statut'   => $statut,
            'priorite' => $priorite,
            'assigne'  => $assigne
        ];

        array_push($projets, $nouveau_projet);
    }
}