<?php require_once "../config.php" ?>

<?php
if(empty($_POST['new_username']))
{
  $_SESSION['prompt'] = "New username is empty, bro...";
  header("Location: ../../admin.php");
  exit();
}

$sql = "UPDATE user SET username = :new_username WHERE id = :target";
$dataBinded = array(
    ':new_username' => $_POST['new_username'],
    ':target' => $_POST['target'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);

header("Location: ../../admin.php");
?>
