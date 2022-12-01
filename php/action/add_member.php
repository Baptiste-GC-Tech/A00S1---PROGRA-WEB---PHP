<?php require_once "../config.php" ?>

<?php
$i = 0;
foreach ($_FILES as $file)
{
  $i++;
  $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
  if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'webp')
  {
      $member_pic = "asset/".$file['name'];
      move_uploaded_file($file['tmp_name'], "../../".$details_img);
      break;
  }
  else
  {
    echo "/!\\ EXTENSION ERRONÉE POUR LE FICHIER ".$i." /!\\";
  }
}
?>

<?php
$sql = "INSERT INTO duo_member VALUES(DEFAULT, :pic, :alt, :quote, :description)";
$dataBinded = array(
    ':pic' => $member_pic,
    ':alt' => $_POST['alt'],
    ':quote' => $_POST['quote'],
    ':description' => $_POST['description'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
?>

<?php header('Location: ../../admin.php') ?>
