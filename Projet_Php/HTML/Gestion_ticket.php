<?php





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $erreurs_ticket = 0;
    $titre = trim($_POST['titre']    ?? '');
    $description = trim($_POST['description'] ?? '');
    $statut = trim($_POST['statut']   ?? '');
    $priorite = trim($_POST['priorite'] ?? '');
    $type = trim($_POST['type']     ?? '');
    $projet = trim($_POST['projet']   ?? '');
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
        $nouveau_ticket = [
            'titre'    => $titre,
            'description' => $description,
            'statut'   => $statut,
            'priorite' => $priorite,
            'type'     => $type,
            'projet'   => $projet,
            'assigne'  => $assigne
        ];

        array_push($tickets, $nouveau_ticket);
    }
}