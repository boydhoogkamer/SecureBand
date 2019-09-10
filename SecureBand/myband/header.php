<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="home.css">
  <link rel="stylesheet" href="footer.css">
  <link rel="stylesheet" href="pagina.css">
  <link rel="stylesheet" href="patchnotes.css">
  <link rel="stylesheet" href="about.css">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="gametips.css">
  <title>League Notes</title>
</head>

<body>
  <div class="article">
    <header>
      <div class="navbar">
        <ul class="navbarimg">
          <li><a href="home.php"><img src="img/boydlogo.png" alt="logo"></a></li>
        </ul>
        <nav>
            <ul class="navbartext">
              <li><a class="<?php if($page == "patchnotes"){echo 'active';}?>" href="http://25848.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/myband/index.php?page=patchnotes">Patch Notes</a></li>
              <li><a class="<?php if($page == "gametips"){echo 'active';}?>" href="http://25848.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/myband/index.php?page=gametips">Game Tips</a></li>
              <li><a class="<?php if($page == "about"){echo 'active';}?>" href="http://25848.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/myband/index.php?page=about">About</a></li>
              <li><a class="<?php if($page == "contact"){echo 'active';}?>" href="http://25848.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/proj/myband/index.php?page=contact">Contact</a></li>
            </ul>
      </div>
    </header>