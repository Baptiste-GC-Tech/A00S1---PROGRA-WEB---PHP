<?php require_once "../config.php" ?>

<?php
$info = pathinfo($pathtofile);
if (!($info["extension"] == "jpg" || $info["extension"] == "png" || $info["extension"] == "jpeg"))
{
    echo "EXTENSION ERRONÉE (.jpg .png .jpeg)"
}
move_uploaded_file($_FILES['image']['tmp_name'], "asset/".$_FILES['image']['name']);
?>