<?php require_once "../config.php" ?>

<?php
$sql = "DELETE FROM project_page WHERE id = :target";
$dataBinded = array(
    ':target' => $_POST['target'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);

$sql = "DELETE FROM carrousel_elem WHERE link = :target";
$dataBinded = array(
    ':target' => $_POST['target'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);

header("Location: ../../admin.php");
?>
