<?php require_once "php/config.php" ?>

<?php
if(isset($_SESSION['loggedIn']))
{
  $sql = "SELECT admin FROM user WHERE username = :loggedIn";
  $dataBinded = array(
      ':loggedIn' => $_SESSION['loggedIn'],
  );
  $pre = $pdo -> prepare($sql);
  $pre -> execute($dataBinded);
  $isAdmin = $pre -> fetch(PDO::FETCH_ASSOC);

  if($isAdmin['admin'] != 1)
  {
    header("Location: index.php");
  }
}
else
{
  header("Location: index.php");
}
?>

  <p>
    <?php
    if(isset($_SESSION['prompt']))
    {
      echo "/---------------------!!!---------------------<br>";
      echo $_SESSION['prompt']."<br>";
      echo "\\---------------------!!!---------------------";
    }
    unset($_SESSION['prompt']);
    ?>
  </p>

<h1>PANEL ADMIN</h1>

<a href="index.php#home">Retour à la page principale</a>

<h2>Liste des utilisateurs enregistrés</h2>
<?php
$sql = "SELECT * FROM user";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$listUser = $pre->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
  <?php
  foreach ($listUser as $user)
  {
    echo "<li>".$user['username']." N°".$user['id']." ADMIN : ".$user['admin'];
    echo
    "
      <form method=\"post\" action=\"php/action/change_username.php\">
        <input type=\"hidden\" name=\"target\" value=\"".$user['id']."\">
        <input type=\"text\" name=\"new_username\" value=\"".$user['username']."\">
        <button type=\"submit\">Change username</button>
      </form>
    ";
    echo
    "
      <form method=\"post\" action=\"php/action/delete_user.php\">
        <input type=\"hidden\" name=\"target\" value=\"".$user['id']."\">
        <button type=\"submit\">Remove user</button>
      </form>
    ";
    echo
    "
      <form method=\"post\" action=\"php/action/toggle_admin.php\">
        <input type=\"hidden\" name=\"target\" value=\"".$user['id']."\">
        <input type=\"hidden\" name=\"cur_admin\" value=\"".$user['admin']."\">
        <button type=\"submit\">Toggle privileges</button>
      </form>
    ";
  }
  ?>
</ul>

<h2>Liste des projets existants</h2>
<?php
$sql = "SELECT * FROM project_page";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$listProject = $pre->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
    <?php
    foreach($listProject as $project)
    {
        echo
        "
          <li>
            <a href=\"projet.php?id=".$project['id']."\">".$project['project_title']." N°".$project['id']."</a>
          </li>
        ";
        echo
        "
          <form method=\"post\" action=\"php/action/delete_project.php\">
            <input type=\"hidden\" name=\"target\" value=\"".$project['id']."\">
            <button type=\"submit\">Remove project</button>
          </form>
        ";
    };
    ?>
</ul>

<h3>Ajouter un projet</h3>
<form method="post" action="php/action/add_project.php" enctype="multipart/form-data">
    <input type="text" name="title" value="Titre du projet"><br>

    <textarea name="details" cols="30" rows="10">Les détails du projet...</textarea>
    <input type="file" name="details_img">
    <input type="text" name="details_alt" value="Description de l'image"><br>

    <textarea name="subject" cols="30" rows="10">Le sujet du projet...</textarea>
    <input type="file" name="subject_img">
    <input type="text" name="subject_alt" value="Description de l'image"><br>

    <textarea name="teachings" cols="30" rows="10">Les acquis apportés par le projet...</textarea>
    <input type="file" name="teachings_img">
    <input type="text" name="teachings_alt" value="Description de l'image"><br>

    <p>L'image pour le carrousel : <input type="file" name="carrousel_img"><input type="text" name="carrousel_alt" value="Description de l'image"></p>

    <button type="submit">Ajouter à la BD</button>
</form>


<h2>Liste des membres existants</h2>
<?php
$sql = "SELECT * FROM duo_member";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$listMember = $pre->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
    <?php
    foreach($listMember as $member)
    {
        echo "<li>N° ".$member['id']."<img src=\"".$member['pic']."\"";
        echo "<br>";
    };
    ?>
</ul>

<h3>Ajouter un membre</h3>
<form method="post" action="php/action/add_member.php" enctype="multipart/form-data">
    <input type="text" name="quote" value="Citation/Inspiration"><br>
    <textarea name="description" cols="30" rows="10">Description, backstory, blablabla...</textarea>
    <input type="file" name="pic">
    <input type="text" name="alt" value="Description de l'image"><br>

    <button type="submit">Ajouter à la BD</button>
</form>
