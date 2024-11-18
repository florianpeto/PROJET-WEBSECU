<?php

require 'config.php';
$pdo = new PDO(DSN, USER, PASS);

$nom = htmlentities(trim($_POST['nom']));
$prenom = htmlentities(trim($_POST['prenom']));
$mot_de_passe = htmlentities(trim($_POST['mot_de_passe'])); 
$email = htmlentities(trim($_POST['email']));
$Motdebienvenue =" Bienvenue sur Votre Espace :)";
echo $Motdebienvenue;
$query = "INSERT INTO eleve (nom, prenom, `mot_de_passe`, mail) VALUES(:nomPlaceholder, :prenomPlaceholder, :mot_de_passePlaceholder, :emailPlaceholder)";

$stmt = $pdo->prepare($query);
$stmt->bindValue(':nomPlaceholder', $nom, PDO::PARAM_STR);
$stmt->bindValue(':prenomPlaceholder', $prenom, PDO::PARAM_STR);
$stmt->bindValue(':mot_de_passePlaceholder', $mot_de_passe, PDO::PARAM_STR);
$stmt->bindValue(':emailPlaceholder', $email, PDO::PARAM_STR);
$stmt->execute();
