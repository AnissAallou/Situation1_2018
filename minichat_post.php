<?php
// Connexion à la base de données
include_once('includes.php');

// Insertion du message à l'aide 
// d'une requête préparée
$req = $bdd->prepare('INSERT INTO minichat (pseudo, message) 
VALUES(?, ?)'); 
// Chaque "?" correspond à une donnée 
// à insérer dans la table
$req->execute(array($_POST['pseudo'], 
$_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: minichat.php');
?>


