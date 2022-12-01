<?php require_once "php/config.php" ?>


<nav class="nav-wrapper teal">
  <div class="container">
    <a href="#" class="sidenav-trigger" data-target="mobile-navbar">
      <i class="material-icons">menu</i>
    </a>
    <ul class="left hide-on-med-and-down">
      <li><a href="index.php#home"><i id="current" class="material-icons">home</i></a></li>
      <li><a href="index.php#duo">Notre duo</a></li>
      <?php
      $sql = "SELECT * FROM project_page";
      $pre = $pdo -> prepare($sql);
      $pre -> execute();
      $listProject = $pre->fetchAll(PDO::FETCH_ASSOC);
          foreach($listProject as $project)
          {
              echo "<li><a href=\"projet.php?id=".$project['id']."\">".$project['project_title']."</a></li>";
          };
      ?>
      <li><a href="#reachout">Nous contacter</a></li>
    </ul>
  </div>
</nav>

<ul class="sidenav" id="mobile-navbar">
  <li><a href="#duo">Notre duo</a></li>
  <li><a href="#projet1">Projet 1</a></li>
  <li><a href="#projet2">Projet 2</a></li>
  <li><a href="#projet3">Projet 3</a></li>
  <li><a href="#reachout">Nous contacter</a></li>
  <li><a href="#connection">Se connecter</a></li>
</ul>
