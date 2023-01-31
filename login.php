<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Acceuil</title>
</head>

<body>
  <?php
  include 'crud/connexion.php';

  include 'nav_bar.php';
  $_SESSION['pseudo'] = "test";

  ?>
  <div>
    <form action="crud/utilisateur/conexion_table.php" method="GET" class="login">
      <p>pseudo</p>
      <label for="">pseudo</label>
      <input type="text" name="nom-user" placeholder='entre ton pseudo'>
      <?php
      ?>
      <button id="envoyer" type="submit">envoyer</a></button>

    </form>
  </div>
</body>

</html>

<?php
$pseudo = "";
if (isset($_GET['nom-user'])) {
  $pseudo = htmlspecialchars($_GET['nom-user']);

  header('Location: crud/utilisateur/conexion_table.php');
} ?>