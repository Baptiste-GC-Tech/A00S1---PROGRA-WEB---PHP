<?php require_once "C:\UwAmp\www\my-app\A00S1---PROGRA-WEB---PHP\php nonsense\config.php" ?>

<?php
$sql = "SELECT * FROM carrousel_elem WHERE id = :carrousel_id";
$dataBinded = array(
    ':carrousel_id' => $carrousel_id
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
$selectedCarrImg = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($selectedCarrImg as $data){
  $img = $data['img'];
  $alt = $data['alt'];
};
?>

<a href="projet1.php" class="carousel-item"><img src="<?php echo $img ?>" alt="<?php echo $alt ?>"></a>