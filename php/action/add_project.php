<?php require_once "../config.php" ?>

<?php
$i = 0;
foreach ($_FILES as $file)
{
  $i++;
  $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
  if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg')
  {
    switch ($i)
    {
      case 1:
        $details_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$details_img);
        echo $details_img."\n";
        break;
      case 2:
        $subject_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$subject_img);
        echo $subject_img."\n";
        break;
      case 3:
        $teachings_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$teachings_img);
        echo $teachings_img."\n";
        break;
    }
  }
  else
  {
    echo "/!\\ EXTENSION ERRONÉE POUR LE FICHIER ".$i." /!\\";
  }
}
?>

<?php
$sql = "INSERT INTO project_page VALUES(DEFAULT, :title, :details, :details_img, :details_alt, :subject, :subject_img, :subject_alt, :teachings, :teachings_img, :teachings_alt)";
$dataBinded = array(
    ':title' => $_POST['title'],
    ':details' => $_POST['details'],
    ':details_img' => $details_img,
    ':details_alt' => $_POST['details_alt'],
    ':subject' => $_POST['subject'],
    ':subject_img' => $subject_img,
    ':subject_alt' => $_POST['subject_alt'],
    ':teachings' => $_POST['teachings'],
    ':teachings_img' => $teachings_img,
    ':teachings_alt' => $_POST['teachings_alt'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
?>

<?php header('Location: ../../admin.php') ?>
