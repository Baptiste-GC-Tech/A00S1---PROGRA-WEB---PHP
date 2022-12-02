<?php require_once "../config.php" ?>

<?php
foreach($_POST as $data)
{
  if(empty($data))
  {
    $_SESSION['prompt'] = "Some text data were missing...";
    header('Location: ../../admin.php');
    exit();
  }
}

foreach ($_FILES as $file)
{
  if($file['error'] != 0)
  {
    $_SESSION['prompt'] = "Something went wrong with member picture or it was missing...";
    header('Location: ../../admin.php');
    exit();
  }
  $extension = pathinfo($file['name'], PATHINFO_EXTENSION);
  if($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'webp')
  {
      $member_pic = "asset/".$file['name'];
      move_uploaded_file($file['tmp_name'], "../../".$details_img);
      break;
  }
  else
  {
    $_SESSION['prompt'] = "Member picture is in an unsupported extension !";
    header('Location: ../../admin.php');
    exit();
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
