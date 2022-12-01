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
  $_SESSION['prompt'] = "Pas de mot de passe !";
  header("Location: ../../index.php");
  exit();
}
?>

<?php
$sql = "SELECT * FROM user";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$listLogin = $pre -> fetchAll(PDO::FETCH_ASSOC);

$nameFound = 0;
$success = 0;

foreach ($listLogin as $login)
{
  if($login['username'] == $_POST['username'])
  {
    $nameFound = 1;

    if($login['password'] == MD5($passwordSecurity.$_POST['password']))
    {
      $success = 1;
      $_SESSION['loggedIn'] = $_POST['username'];

      if($login['admin'] == 1)
      {
        header("Location: ../../admin.php");
      }
      else
      {
        header("Location: ../../index.php");
      }
    }
  }
}
?>

<?php
if($nameFound == 0)
{
  $_SESSION['prompt'] = "L'utilisateur n'a pas été trouvé !";
}
elseif($success == 0)
{
  $_SESSION['prompt'] = "Le mot de passe est incorrecte !";
}
?>
