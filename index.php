
<?php

    echo("je suis là");

    $dsn = "mysql:host=localhost:8889;dbname=php_bd;charset=utf8mb4";
    $user = "root";
    $password = "root";

    try {
        $pdo = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);

        $stmt = $pdo->query("SELECT * FROM tickets");
$tickets = $stmt->fetchAll();

foreach ($tickets as $ticket) {
    echo $ticket['titre'] . ' — ' . $ticket['statut'];
}

    } catch (PDOException $e) {
        die("Erreur connexion : " . $e->getMessage());
    }
    
    echo("je suis connecté");




$projets = [
    "Projet PHP" => "./Projet_Php/HTML/tableaudebord.php",
    "Projet PHP et SQL" => "./Projet_php_et_BD/HTML/tableaudebord.php"
];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Mes projets PHP</title>

<style>

body{
    font-family: Arial;
    background:#f4f4f4;
    margin:0;
}

.container{
    width:800px;
    margin:50px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 5px 15px rgba(0,0,0,0.1);
}

h1{
    text-align:center;
}

.projets{
    display:flex;
    gap:20px;
}

.projet{
    padding:20px;
    border-radius:8px;
    background:#eef5ff;
    text-align:center;
    transition:0.2s;
}

.projet:hover{
    transform:scale(1.05);
    background:#dbe9ff;
}

.projet a{
    text-decoration:none;
    font-size:18px;
    color:#003366;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="container">

<h1>Mes projets Web</h1>

<div class="projets">

<?php
foreach($projets as $nom => $lien){
    echo "
    <div class='projet'>
        <a href='$lien' target='_blank'>$nom</a>
    </div>
    ";
}
?>

</div>

</div>

</body>
</html>