<?php
// Connexion PDO a la base de donnée
try {
    $dns = 'mysql:host=localhost;dbname=bookmark_bdd;charset=utf8';
    $user = 'root';
    $pass = '';
    $connexion = new PDO($dns, $user, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
}

// Affichage d'erreur si connexion échoué
catch (Exception $e) {
    echo 'Connexion échoué';
    die('Erreur : ' . $e->getMessage());
}
?>