<?php





if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $erreurs_ticket = 0;
    // récupération form ticket avec vérification si null
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

    //htmlspecialchar = éviter injection sql en changeant les caractéres problématques
    //ENT_QUOTES = transformer ' en "
    //UTF8 = éviter problème encodage
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