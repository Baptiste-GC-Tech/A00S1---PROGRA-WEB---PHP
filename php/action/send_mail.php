<?php require_once "../config.php" ?>

<?php
foreach($_POST as $data)
{
  if(empty($data))
  {
    $_SESSION['prompt'] = "Un champ du formulaire est manquant";
    header("Location: ../../index.php");
    exit();
  }
}

$headers =  'MIME-Version: 1.0'."\r\n";
$headers .= 'From: '.$_POST['mail']."\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";

if(mail("bboismenu@gaming.tech", $_POST['mail_object'], $_POST['mail_content'], $headers))
{
  echo "yay";
}
?>

<a href="../../index.php#home">GO BACK HOME</a>
