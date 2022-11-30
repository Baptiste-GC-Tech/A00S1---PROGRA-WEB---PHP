<?php require_once "php/config.php" ?>

<?php
$sql = "SELECT * FROM project_page WHERE id = :project_id";
$dataBinded = array(
    ':project_id' => $_GET['id'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
$projectData = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach
?>

<div class="col s12  teal darken-3"><h1 id="text-vid">Site web MicroMages</h1></div>