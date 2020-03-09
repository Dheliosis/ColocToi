<?php session_start() ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="header.css">
    <title><?php echo $pageName ?></title>
  </head>
  <body>
    <header>
      <h1 class="">
        <a href="header.php"><img src="" alt="ColocToi - Trouve ta colocation"/></a>
      </h1>
      <nav class="">
        <p><img src="img/header/loupe_recherche.png"/> Recherche </p>
        <p><a href="" > Faites-nous confiance </a></p>
        <p><a href="" > Poster </a></p>
        <?php if(!empty($_SESSION['log'])){ ?>
          <p><a href="" > Mes publications </a></p>
          <p><a href="" > Mon compte </a></p>
          <p id="logOut"><a href="logOut.php"> Déconnexion </a></p>
          <?php }
          else{ ?>
        <p><a href="logIn.php" > Connexion </a></p>
        <p><a href="" > Inscription </a></p>
        <?php } ?>
      </nav>

    </header>