<?php require_once "C:\UwAmp\www\my-app\A00S1---PROGRA-WEB---PHP\php/config.php" ?>

<?php
$sql = "SELECT * FROM duo_member WHERE id = :member_id";
$dataBinded = array(
    ':member_id' => $member_id
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
$selectedMember = $pre->fetchAll(PDO::FETCH_ASSOC);

foreach($selectedMember as $data){
  $pic = $data['pic'];
  $alt = $data['alt'];
  $quote = $data['quote'];
  $description = $data['description'];
};
?>

<div class="duo_member">
  <img src="<?php echo $pic ?>" alt="<?php echo $alt ?>">
  <h2 class="col s9 valign-wrapper"><?php echo $quote ?></h2>
</div>
<p><?php echo $description ?></p>