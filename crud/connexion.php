<?php

try {
  // if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "developement") == 0) {
  $db = new PDO(
    'mysql:host=localhost;dbname=resaux_social;charset=utf8',
    'root',
    ''
  );
  // echo 'connexion reussi';
  // }
  // if (strcmp($_SERVER['ENVIRONMENT_TYPE'], "production") == 0) {
  //   $db = new PDO(
  //     'mysql:host=109.234.164.161;
  //     dbname= sc1lgvu9627_bocace-stephane.projet-final;charset=utf8',
  //     'sc1lgvu9627_stephane',
  //     'I0mkWzR5zHuc'
  //   );
  // }
} catch (PDOException $e) {
  die("Erreur : " . $e->getMessage());
}
