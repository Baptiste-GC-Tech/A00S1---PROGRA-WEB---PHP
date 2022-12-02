<?php require_once "php/config.php" ?>

<?php
$sql = "SELECT * FROM home_page WHERE id = 1";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$duoMember = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($duoMember as $member)
{
  $member1 = $member['member1'];
  $member2 = $member['member2'];
}
?>

<?php header("Location: home.php?mb1=".$member1."&mb2=".$member2.""); ?>
