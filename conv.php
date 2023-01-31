<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/navbar.css">
  <link rel="stylesheet" href="css/conv.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <title>Acceuil</title>
</head>

<body>
  <?php
  include 'nav_bar.php';
  $user = $_GET['nom-user'];


  ?>
  <div class="conv">

    <div class="conversation">
      <h1>conversation generale </h1>
      <div class="row">
        <textarea name="" id="" cols="150" rows="10"></textarea>
        <button type="submit">envoie</button>
      </div>
    </div>
    <div class="liste">
      <h1>liste utilisateur </h1>
      <?php echo $user; ?>
    </div>
  </div>

</body>

</html>