<?php
include '../connexion.php';
$ref = $_GET['nom-user'];

$requete = $db->prepare("SELECT `psudo` FROM `identifiant`");
$requete->execute();

$affichage = $requete->fetchAll(PDO::FETCH_ASSOC);

for ($j = 0; $j < sizeof($affichage); $j++) {


  if ($ref == $affichage[$j]['psudo']) {
    header('Location:../../login.php');
    break;
  }
}

header('Location:../../conv.php?nom-user=' . $ref);
