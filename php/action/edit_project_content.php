<?php require_once "../config.php" ?>

<?php
foreach($_POST as $data)
{
  if(empty($data))
  {
    $_SESSION['prompt'] = "Some text data were missing...";
    header("Location: ../../projet.php?id=".$_POST['target']);
    exit();
  }
}

foreach ($_FILES as $file)
{
  $extension = pathinfo($file['name'], PATHINFO_EXTENSION);

  if($file['error'] != 0)
  {
    switch ($_POST['area'])
    {
      case 'details':
        $sql = "UPDATE project_page SET project_details = :text WHERE id = :target;
                UPDATE project_page SET details_alt = :alt WHERE id = :target";
        break;
      case 'subject':
        $sql = "UPDATE project_page SET project_subject = :text WHERE id = :target;
                UPDATE project_page SET subject_alt = :alt WHERE id = :target";
        break;
      case 'teachings':
        $sql = "UPDATE project_page SET project_teachings = :text WHERE id = :target;
                UPDATE project_page SET teachings_alt = :alt WHERE id = :target";
        break;
    }
    $dataBinded = array(
        ':target' => $_POST['target'],
        ':text' => $_POST['text'],
        ':alt' => $_POST['alt'],
    );
  }

  elseif($extension == 'png' || $extension == 'jpg' || $extension == 'jpeg' || $extension == 'webp')
  {
    $newImg = "asset/".$file['name'];
    move_uploaded_file($file['tmp_name'], "../../".$newImg);

    switch ($_POST['area'])
    {
      case 'details':
        $sql = "UPDATE project_page SET project_details = :text WHERE id = :target;
                UPDATE project_page SET details_alt = :alt WHERE id = :target;
                UPDATE project_page SET details_img = :img WHERE id = :target";
        break;
      case 'subject':
        $sql = "UPDATE project_page SET project_subject = :text WHERE id = :target;
                UPDATE project_page SET subject_alt = :alt WHERE id = :target;
                UPDATE project_page SET subject_img = :img WHERE id = :target";
        break;
      case 'teachings':
        $sql = "UPDATE project_page SET project_teachings = :text WHERE id = :target;
                UPDATE project_page SET teachings_alt = :alt WHERE id = :target;
                UPDATE project_page SET teachings_img = :img WHERE id = :target";
        break;
    }
    $dataBinded = array(
        ':target' => $_POST['target'],
        ':text' => $_POST['text'],
        ':alt' => $_POST['alt'],
        ':img' => $newImg,
    );
  }

  else
  {
    $_SESSION['prompt'] = "Image for '".$_POST['area']."' section is in an unsupported extension !";
    header("Location: ../../projet.php?id=".$_POST['target']);
    exit();
  }
}

$pre = $pdo -> prepare($sql);
print_r($pre);echo "<br>";
$pre -> execute($dataBinded);
print_r($sql);echo "<br>";

header("Location: ../../projet.php?id=".$_POST['target']);
?>
