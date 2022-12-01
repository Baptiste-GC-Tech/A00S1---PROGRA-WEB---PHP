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

$i = 0;
foreach ($_FILES as $file)
{
  $i++;
  $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

  if($file['error'] != 0)
  {
    switch ($i)
    {
      case 1:
        $_SESSION['prompt'] = "Something went wrong with image for 'details' section or it was missing...";
        break;
      case 2:
        $_SESSION['prompt'] = "Something went wrong with image for 'subject' section or it was missing...";
        break;
      case 3:
        $_SESSION['prompt'] = "Something went wrong with image for 'teachings' section or it was missing...";
        break;
      case 4:
        $_SESSION['prompt'] = "Something went wrong with image for the carrousel  or it was missing...";
        break;
    }
    header('Location: ../../admin.php');
    exit();
  }

  elseif($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'webp')
  {
    switch ($i)
    {
      case 1:
        $details_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$details_img);
        break;
      case 2:
        $subject_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$subject_img);
        break;
      case 3:
        $teachings_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$teachings_img);
        break;
      case 4:
        $carrousel_img = "asset/".$file['name'];
        move_uploaded_file($file['tmp_name'], "../../".$carrousel_img);
        break;
    }
  }

  else
  {
    switch ($i)
    {
      case 1:
        $_SESSION['prompt'] = "Image for 'details' section is in an unsupported extension !";
        break;
      case 2:
        $_SESSION['prompt'] = "Image for 'subject' section is in an unsupported extension !";
        break;
      case 3:
        $_SESSION['prompt'] = "Image for 'teachings' section is in an unsupported extension !";
        break;
      case 4:
        $_SESSION['prompt'] = "Image for the carrousel section is in an unsupported extension !";
        break;
    }
    header('Location: ../../admin.php');
    exit();
  }
}
?>

<?php
// $sql_project = "INSERT INTO project_page VALUES(DEFAULT, :title, :details, :details_img, :details_alt, :subject, :subject_img, :subject_alt, :teachings, :teachings_img, :teachings_alt)";
// $dataBinded_p = array(
//     ':title' => $_POST['title'],
//     ':details' => $_POST['details'],
//     ':details_img' => $details_img,
//     ':details_alt' => $_POST['details_alt'],
//     ':subject' => $_POST['subject'],
//     ':subject_img' => $subject_img,
//     ':subject_alt' => $_POST['subject_alt'],
//     ':teachings' => $_POST['teachings'],
//     ':teachings_img' => $teachings_img,
//     ':teachings_alt' => $_POST['teachings_alt'],
// );
// $pre = $pdo -> prepare($sql_project);
// $pre -> execute($dataBinded_p);
//
// $sql_carrousel = "INSERT INTO carrousel_elem VALUES(DEFAULT, :carr_img, :carr_alt, :link)";
// $dataBinded_c = array(
//     ':carr_img' => $carrousel_img,
//     ':carr_alt' => $_POST['carrousel_alt'],
//     ':link' => $pdo -> lastInsertId(),
// );
// $pre = $pdo -> prepare($sql_carrousel);
// $pre -> execute($dataBinded_c);
?>

<?php // header('Location: ../../admin.php') ?>
