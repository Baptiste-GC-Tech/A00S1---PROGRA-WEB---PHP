<?php require_once "../config.php" ?>

<?php
$sql = "DELETE FROM user WHERE id = :target";
$dataBinded = array(
    ':target' => $_POST['target'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);

header("Location: ../../admin.php");
?>
