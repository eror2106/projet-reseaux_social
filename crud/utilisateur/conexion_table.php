<?php
include '../connexion.php';


$requete = $db->prepare("SELECT `psudo` FROM `identifiant`");
$requete->execute();

$affichage = $requete->fetchAll(PDO::FETCH_ASSOC);

var_dump($affichage);
