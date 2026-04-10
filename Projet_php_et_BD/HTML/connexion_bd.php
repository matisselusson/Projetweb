<?php
$dsn = "mysql:host=localhost:8889;dbname=php_bd;charset=utf8mb4";
    $user = "root";
    $password = "root";
    try {
        $pdo = new PDO($dsn, $user, $password, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);



    } catch (PDOException $e) {
        die("Erreur connexion : " . $e->getMessage());
    }
    

?>