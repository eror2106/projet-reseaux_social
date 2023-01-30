<?php
include '../connexion.php';


$requete = $db->prepare("SELECT `psudo` FROM `identifiant`");
$requete->execute();

$affichage = $requete->fetchAll(PDO::FETCH_ASSOC);

// var_dump($affichage);
// var_dump($affichage["1"]['psudo']);
?>
<div style="display: flex; flex-direction:row;">
  <?php
  for ($j = 0; $j < sizeof($affichage); $j++) {

  ?>
    <div style="border: 1px black solid;margin:1%;">
      <?php
      for ($i = 0; $i < 1; $i++) {
        echo 'utilisateur n' . $j . " <br> " . "<strong>" . $affichage[$j]['psudo'] . "</strong>";
      }
      ?>
    </div>
  <?php
  } ?>
</div>