<?php require_once "../config.php" ?>

<?php
if(empty($_POST['title']))
{
  $_SESSION['prompt'] = "Title is empty, c'm'on, dude...";
  header("Location: ../../projet.php?id=".$_POST['target']);
  exit();
}

$sql = "UPDATE project_page SET project_title = :title WHERE id = :target";
$dataBinded = array(
    ':target' => $_POST['target'],
    ':title' => $_POST['title'],
);
$pre = $pdo -> prepare($sql);
print_r($pre);echo "<br>";
$pre -> execute($dataBinded);
print_r($sql);echo "<br>";

header("Location: ../../projet.php?id=".$_POST['target']);
?>
