<?php require_once "php/config.php" ?>

<?php
$sql = "SELECT * FROM carrousel_elem";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$selectedCarrImg = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($selectedCarrImg as $data){
  $img = $data['img'];
  $alt = $data['alt'];
  $link = $data['link'];

  echo "<a href=\"projet.php?id=".$link."\" class=\"carousel-item\"><img src=\"".$img."\" alt=\"".$alt."\"></a>";
};
?>
