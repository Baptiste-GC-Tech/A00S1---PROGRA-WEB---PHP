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
    <nav class="nav-wrapper teal">
      <div class="container">
        <a href="#" class="sidenav-trigger" data-target="mobile-navbar">
          <i class="material-icons">menu</i>
        </a>
        <ul class="hide-on-med-and-down">
          <li><a href="index.php"><i class="material-icons">home</i></a></li>
          <li><a href="index.php#duo">Notre duo</a></li>
          <li><a href="projet1.php" id="current">Projet 1</a></li>
          <li><a href="projet2.php">Projet 2</a></li>
          <li><a href="projet3.php">Projet 3</a></li>
          <li><a href="index.php#reachout">Nous contacter</a></li>
          <li class="right"><a id="text-vid" class="teal teal-text" href="#">i</a></li>
        </ul>
      </div>
    </nav>

  <ul class="sidenav teal lighten-3" id="mobile-navbar">
    <li><a href="index.php">Home</a></li>
    <li><a href="index.php#duo">Notre duo</a></li>
    <li><a href="projet1.php" id="current">Projet 1</a></li>
    <li><a href="projet2.php">Projet 2</a></li>
    <li><a href="projet3.php">Projet 3</a></li>
    <li><a href="index.php#reachout">Nous contacter</a></li>
  </ul>

  <div class="parallax-container">
    <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
  </div>
  <div class="col s12 m2 card-panel row center-align teal darken-4 margin0">
    <div class="col s12  teal darken-3"><h1 id="text-vid">Site web MicroMages</h1></div>
    <div class="col l4 s12">
      <h3 class="teal darken-2">Détails du projet</h3>
      <p class="teal darken-1">Le CSS se base beacoup sur du flex, que j'ai réussis à rendre bien plus simple et condensé grâce aux précieux cours d'Antoine DiRoberto. Il nous a bien montrer que se casser la tâte pour rien, et ben ça sert à rien, et c'est bien plus agrébale de travailler comme ça</p>
      <img src="asset/p1asset1.png" class="responsive-img">
    </div>
    <div class="col l4 s12">
      <h3 class="teal darken-2">Le sujet</h3>
      <p class="teal darken-1">Un site pour présenter notre jeu préféré ? J'ai vu ça comme un moyen de mettre en lumière un jeu que moi j'adore. Mon binôme a accepté mon idée après que je le lui ai montré. Il a été sympa, et d'une grande aide !</p>
      <img src="asset/p1asset2.png" class="responsive-img">
    </div>
    <div class="col l4 s12">
      <h3 class="teal darken-2">Compétences aquises</h3>
      <p class="teal darken-1">Une petite revues des bases d'html, ça ne peut pas faire de mal !<br>Je n'ai rien appris de vraiment neuf mais ce projet était bien plus engageant et m'a permis de maîtriser ce que je savais du BUT bien mieux qu'auparavant.</p>
      <img src="asset/p1asset3.png" class="responsive-img">
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
  </div>

  <footer class="center black">
    <p class="white-text margin0">  <span id="trigger1">&copy;</span> 2022-2023 Baptiste BOISMENU and Mathias LIPKO. All Rights Reserved. </p>
  </footer>

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
