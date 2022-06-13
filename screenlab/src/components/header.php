<!doctype html>
<html lang="fr">

<head>
  <meta name="viewport" content="width=device-width; initial-scale=1; viewport-fit=cover; maximum-scale=1">
  <title><?php
  if(isset($title)){
    echo $title;
  }
  else{
    echo "ScreenLab";
  }?>
  </title>
  <link rel="stylesheet" href="src/styles/styled.scss">

<body>
  <header >

    <a class="lien-header" id="icon-compte" href="index.php?page=mon-compte">
    <?php include ASSETS_DIR."svg/profile-circle.svg"?>
    </a>
    <a class="lien-header" id="logo" href="index.php?page=accueil">
    <?php include ASSETS_DIR."svg/screenlab.svg"?>
    </a>
    <a class="lien-header" id="notification">
    <?php include ASSETS_DIR."svg/notification.svg"?>
    </a>
    <a class="lien-header" id="match" href="index.php?page=match">
    <?php include ASSETS_DIR."svg/like-tag.svg"?>
    </a>
    
  </header>