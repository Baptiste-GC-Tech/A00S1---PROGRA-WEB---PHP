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

  <?php require "php/contents/responsive_navbar.php" ?>

  <div class="parallax-container">
    <div class="parallax"><img src="asset/hexagon-background.jpg"></div>
  </div>
  <div class="col s12 m2 card-panel row center-align teal darken-4 margin0">
    <?php require_once "php/contents/project_page.php" ?>
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
