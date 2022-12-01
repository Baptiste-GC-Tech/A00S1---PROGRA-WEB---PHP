<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>

    <?php require "php/contents/responsive_navbar.php" ?>

    <div id="content" class="blue-grey lighten-3">

      <div class="grey lighten-2">
        <p class="orange">
          <?php
          if(isset($_SESSION['prompt']))
          {
            echo $_SESSION['prompt'];
          }
          unset($_SESSION['prompt']);
          ?>
        </p>
        <?php
        if(isset($_SESSION['loggedIn']))
        {
          echo "Bienvenu ".$_SESSION['loggedIn'];
          echo
          "
            <form method=\"post\" action=\"php/action/logout.php\">
              <button type=\"submit\">Se déconnecter</button>
            </form>
          ";
        }
        ?>
      </div>


      <h1 class="center">Nos accomplissement numérique</h1>

      <div id="duo" class="row">
        <div class="col m1 hide-on-small-only"></div>
        <div class="col m5 s6">
          <?php $member_id = 1 ?>
          <?php require "php/contents/duo_member.php" ?>
        </div>
        <div class="col m5 s6">
          <?php $member_id = 2 ?>
          <?php require "php/contents/duo_member.php" ?>
        </div>
        <div class="col m1 hide-on-small-only"></div>
      </div>

      <div class="row">
        <div class="col s2"></div>
        <div class="carousel carousel-slider col s8">
          <?php require "php/contents/carrousel_entry.php" ?>
        </div>
        <div class="col s2"></div>
      </div>

      <a id="reachout" data-target="contact_modal" class="btn-floating btn-large modal-trigger pulse cyan"><i class="material-icons">markunread_mailbox</i></a>

      <div id="contact_modal" class="modal">
        <div class="modal-content">
          <h4>Remplissez ce formulaire</h4>
          <form action="" method="get">
            <div class="identity">
              <label for="first_name">Ton prénom : </label> <input type="text" name="first_name">
              <label for="last_name">Ton nom : </label> <input type="text" name="last_name">
            </div>
            <div class="online_identity">
              <label for="email">Ton mail : </label> <input type="email" name="mail">
              <label for="message">Ton message : </label> <input type="text" name="mail_content">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn modal-close cyan">Envoyer</button>
        </div>
      </div>
      <form method="post" action="php/action/login.php">
        <label for="identifiant">Identifiant :</label><br>
        <input type="text" name="username"><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Se connecter</button>
      </form>
      <form method="post" action="php/action/create_account.php">
        <label for="acount">vous n'avez pas de compte?</label><br>
        <label for="identifiant">Identifiant :</label><br>
        <input type="text" name="username"><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" name="password"><br><br>
        <button type="submit">Créer un compte</button>
      </form>
    </div>

    <footer class="center black">
      <p class="white-text"> &copy; 2022-2023 Baptiste BOISMENU and Mathias LIPKO. All Rights Reserved. </p>
    </footer>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
