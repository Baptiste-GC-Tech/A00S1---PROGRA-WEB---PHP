<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style-projet.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <!--JavaScript at end of body for optimized loading-->
  <nav class="nav-wrapper teal">
    <div class="container">
      <a href="#" class="sidenav-trigger" data-target="mobile-navbar">
        <i class="material-icons">menu</i>
      </a>
      <ul class="left hide-on-med-and-down">
        <li><a href="index.php"><i class="material-icons">home</i></a></li>
        <li><a href="index.php#duo">Notre duo</a></li>
        <li><a href="projet1.php">Projet 1</a></li>
        <li><a href="projet2.php">Projet 2</a></li>
        <li><a href="projet3.php" id="current">Projet 3</a></li>
        <li><a href="index.php#reachout">Nous contacter</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav teal lighten-3" id="mobile-navbar">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#duo">Notre duo</a></li>
    <li><a href="projet1.php">Projet 1</a></li>
    <li><a href="projet2.php">Projet 2</a></li>
    <li><a href="projet3.php" id="current">Projet 3</a></li>

  </ul>
  <div class="parallax-container">
    <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
  </div>
  <div class="col s12 m2 card-panel row center-align teal darken-4 margin0">
    <div class="col s12  teal darken-3"><h1>Site web minecraft</h1></div>
    <div class="col l4 s12">
      <h3 class="teal darken-2">Détails du projet</h3>
      <p class="teal darken-1">L'objectif est de réaliser un site web sur le jeu de notre choix, il fallait expliqer en quoi consiste le jeu et citer ses mecaniques de bases.</p>
      <img src="asset/p3asset1.jpg" class="responsive-img">
    </div>
    <div class="col l4 s12">
      <h3 class="teal darken-2">Le sujet</h3>
      <p class="teal darken-1">Le sujet de mon site web était minecraft, il explique les manières de jouer au jeu et ses mécaniques de bases.</p>
      <img src="asset/p3asset2.jpg" class="responsive-img">
    </div>
    <div class="col l4 s12">
      <h3 class="teal darken-2">Compétences aquises</h3>
      <p class="teal darken-1">Les compétance aquises au cours de ce projet était l'encodage en HTML, en css, ainsi que l'utilisation du flex pour aligner les élèments de la page.</p>
      <img src="asset/p3asset3.jpg" class="responsive-img">
    </div>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
  </div>
  <div id="video" class="center-align hide">
    <video src="asset/WOO.mp4" class="margin0"></video>
  </div>
  <footer class="center black margin0">
    <p class="white-text margin0"> <span id="trigger3">&copy;</span> 2022-2023 Baptiste BOISMENU and Mathias LIPKO. All Rights Reserved. </p>
  </footer>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
