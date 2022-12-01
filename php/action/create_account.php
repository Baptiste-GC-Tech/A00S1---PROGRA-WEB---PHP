<?php require_once "../config.php" ?>

<?php
if(empty($_POST['username']))
{
  $_SESSION['prompt'] = "Pas d'identifiant !";
  header("Location: ../../index.php");
  exit();
}
if(empty($_POST['password']))
{
  $_SESSION['prompt'] = "Pas de Mot de passe !";
  header("Location: ../../index.php");
  exit();
}

$sql = "SELECT username from user";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$existingUser = $pre -> fetchAll(PDO::FETCH_ASSOC);

foreach($existingUser as $user)
{
  if($user['username'] == $_POST['username'])
  {
    $_SESSION['prompt'] = "Nom d'utilisateur déjà pris !";
    header("Location: ../../index.php");
    exit();
  }
}
?>

<?php
$sql = "INSERT INTO user VALUES(DEFAULT, :username, MD5(:password), 0)";
$dataBinded = array(
    ':username' => $_POST['username'],
    ':password' => $passwordSecurity.$_POST['password'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);

$_SESSION['prompt'] = "Compte de ".$_POST['username']." créé !"
?>

<?php header("Location: ../../index.php") ?>
