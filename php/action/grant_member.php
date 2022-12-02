<?php require_once "../config.php" ?>

<?php
switch($_POST['position'])
{
  case 1:
    $sql = "UPDATE home_page SET member1 = :target WHERE id = 1";
    break;
  case 2:
    $sql = "UPDATE home_page SET member2 = :target WHERE id = 1";
    break;
}
$dataBinded = array(
    ':target' => $_POST['target'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
?>

<?php header("Location: ../../admin.php") ?>
