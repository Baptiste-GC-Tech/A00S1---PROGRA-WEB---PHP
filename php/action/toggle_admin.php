<?php require_once "../config.php" ?>

<?php

print_r($_POST);

if($_POST['cur_admin'] == 1)
{
  $newAdminValue = 0;
}
else
{
  $newAdminValue = 1;
}
print_r($newAdminValue);

$sql = "UPDATE user SET admin = :admin WHERE id = :target";
$dataBinded = array(
    'admin' => $newAdminValue,
    ':target' => $_POST['target'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);

header("Location: ../../admin.php");
?>
