<?php
include '../connexion.php';
$ref = $_GET['nom-user'];
// echo $ref;
$requete = $db->prepare("SELECT `psudo` FROM `identifiant`");
$requete->execute();

$affichage = $requete->fetchAll(PDO::FETCH_ASSOC);

for ($j = 0; $j < sizeof($affichage); $j++) {


  // for ($i = 0; $i < 1; $i++) {
  echo $affichage[$j]['psudo'] . '<br>';
  // echo  'ref c\'esst :' . $ref . " ";
  var_dump($ref == $affichage[$j]['psudo']);
  if ($ref == $affichage[$j]['psudo']) {
    echo "lol" . $j . "<br>";
    header('Location:../../login.php');
    break;
  }
}

header('Location:../../conv.php?nom-user=' . $ref);
