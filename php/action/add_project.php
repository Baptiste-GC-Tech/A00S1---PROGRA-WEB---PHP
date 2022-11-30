<?php require_once "php/config.php" ?>

<?php
$sql = "INSERT INTO project_page VALUES(:title, :details, :details_img, :details_alt, :subject, :subject_img, :subject_alt, :teachings, :teachings_img, :teachings_alt,)";
$dataBinded = array(
    ':title' => $_POST['title'],
    ':details' => $_POST['details'],
    ':details_img' => $_POST['details_img'],
    ':details_alt' => $_POST['details_alt'],
    ':subject' => $_POST['subject'],
    ':subject_img' => $_POST['subject_img'],
    ':subject_alt' => $_POST['subject_alt'],
    ':teachings' => $_POST['teachings'],
    ':teachings_img' => $_POST['teachings_img'],
    ':teachings_alt' => $_POST['teachings_alt'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
?>

<?php header('Location: panel_admin.php') ?>