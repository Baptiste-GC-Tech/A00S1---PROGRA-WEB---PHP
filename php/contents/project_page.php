<?php require_once "php/config.php" ?>

<?php
$sql = "SELECT * FROM project_page WHERE id = :project_id";
$dataBinded = array(
    ':project_id' => $_GET['id'],
);
$pre = $pdo -> prepare($sql);
$pre -> execute($dataBinded);
$projectData = $pre->fetchAll(PDO::FETCH_ASSOC);

if(empty($projectData))
{
  header("Location: index.php");  
}

foreach($projectData as $data)
{
  $title = $data['project_title'];
  $details = $data['project_details'];
  $details_img = $data['details_img'];
  $details_alt = $data['details_alt'];
  $subject = $data['project_subject'];
  $subject_img = $data['subject_img'];
  $subject_alt = $data['subject_alt'];
  $teachings = $data['project_teachings'];
  $teachings_img = $data['teachings_img'];
  $teachings_alt = $data['teachings_alt'];
}
?>

<div class="col s12 teal darken-3"><h1 id="text-vid"><?php echo $title ?></h1></div>
<div class="col l4 s12">
  <h3 class="teal darken-2">Détails du projet</h3>
  <p class="teal darken-1"><?php echo $details ?></p>
  <img src="<?php echo $details_img ?>" alt="<?php echo $details_alt ?>" class="responsive-img">
</div>
<div class="col l4 s12">
  <h3 class="teal darken-2">Le sujet</h3>
  <p class="teal darken-1"><?php echo $subject ?></p>
  <img src="<?php echo $subject_img ?>" alt="<?php echo $subject_alt ?>" class="responsive-img">
</div>
<div class="col l4 s12">
  <h3 class="teal darken-2">Compétences acquise</h3>
  <p class="teal darken-1"><?php echo $teachings ?></p>
  <img src="<?php echo $teachings_img ?>" alt="<?php echo $teachings_alt ?>" class="responsive-img">
</div>
