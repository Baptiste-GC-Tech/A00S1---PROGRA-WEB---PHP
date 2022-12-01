<?php require_once "php/config.php" ?>

<h1>PANEL ADMIN</h1>

<h3>Ajouter un projet</h3>
<form method="post" action="php/action/add_project.php" enctype="multipart/form-data">
    <input type="text" name="title" value="Titre du projet"><br>

    <textarea name="details" cols="30" rows="10">Les détails du projet...</textarea>
    <input type="file" name="details_img">
    <input type="text" name="details_alt" value="Description de l'image"><br>

    <textarea name="subject" cols="30" rows="10">Le sujet du projet...</textarea>
    <input type="file" name="subject_img">
    <input type="text" name="subject_alt" value="Description de l'image"><br>

    <textarea name="teachings" cols="30" rows="10">Les acquis apportés par le projet...</textarea>
    <input type="file" name="teachings_img">
    <input type="text" name="teachings_alt" value="Description de l'image"><br>

    <button type="submit">Ajouter à la BD</button>
</form>

<h2>Liste des projets existants</h2>
<?php
$sql = "SELECT * FROM project_page";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$listProject = $pre->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
    <?php
    foreach($listProject as $project)
    {
        echo "<li>".$project['project_title'];
    };
    ?>
</ul>
