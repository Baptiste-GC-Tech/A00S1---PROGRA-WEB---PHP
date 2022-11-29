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
        <li><a href="index.php"><i  class="material-icons">home</i></a></li>
        <li><a href="index.php#duo">Notre duo</a></li>
        <li><a href="projet1.php">Projet 1</a></li>
        <li><a href="projet2.php" id="current">Projet 2</a></li>
        <li><a href="projet3.php">Projet 3</a></li>
        <li><a href="index.php#reachout">Nous contacter</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav teal lighten-3" id="mobile-navbar">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#duo">Notre duo</a></li>
    <li><a href="projet1.php">Projet 1</a></li>
    <li><a href="projet2.php" id="current">Projet 2</a></li>
    <li><a href="projet3.php">Projet 3</a></li>
    <li><a href="index.php#reachout">Nous contacter</a></li>
  </ul>


  <div class="parallax-container">
    <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
  </div>
  <div class="col s12 m2 card-panel row center-align teal darken-4 margin0">
    <div class="col s12  teal darken-3"><h1>Application d'analyse de graphe</h1></div>
      <div class="col l4 s12">
        <h3 class="teal darken-2">Détails du projet</h3>
        <p class="teal darken-1">Le projet comporte quelque chose comme 6 ou 7 fenêtres différents, qui peuvent servir de feedback à l'utilisateurs, de charger un graphe ou encore de le manipuler. Tout est fait en Java, donc nous avon eux besoin de beaucoup de classes différentes</p>
        <img src="asset/p2asset1.png" class="responsive-img">
      </div>
      <div class="col l4 s12">
        <h3 class="teal darken-2">Le sujet</h3>
        <p class="teal darken-1">Un de mes projets les plus intéressants, car il s'agissait de coder des outils pour analyser un graphe représentant une carte géographique. Même si on ne traite pas énormément de données, car on était limité à environ 30 sommets, l'aspect graphique de l'application fut très intéressant, et tout faire fonctionner ensemble était assez dur...</p>
        <img src="asset/p2asset2.png" class="responsive-img">
      </div>
      <div class="col l4 s12">
        <h3 class="teal darken-2">Compétences aquises</h3>
        <p class="teal darken-1">Manipuler la bilbiothèque Swing, qui parfois s'est avéré être un vrai calvère... Également la manipulation de système de donner externe, tel que le json, et son exploitation surtout. Et à ça j'ajoute savoir travailler en équipe. C'était dur, de longue haleine, et il y avait beaucoup à faire, alors tout les deux avons dut s'organiser et se répartir les tâche intelligement</p>
        <img src="asset/p2asset3.png" class="responsive-img">
      </div>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
    </div>
    <div id="video" class="center-align hide">
      <video src="asset/punch.mp4" class="margin0"></video>
    </div>
    <footer class="center black">
      <p class="white-text margin0"> <span id="trigger2">&copy;</span> 2022-2023 Baptiste BOISMENU and Mathias LIPKO. All Rights Reserved. </p>
    </footer>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>





  </body>
</html>
