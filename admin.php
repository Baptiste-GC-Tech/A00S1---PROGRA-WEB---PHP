<?php require_once "php/config.php" ?>

<h1>PANEL ADMIN</h1>

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
        echo "<li>".$project['project_title']." N°".$project['id'];
    };
    ?>
</ul>

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

    <p>L'image pour le carrousel : <input type="file" name="carrousel_img"><input type="text" name="carrousel_alt" value="Description de l'image"></p>
    
    <button type="submit">Ajouter à la BD</button>
</form>


<h2>Liste des membres existants</h2>
<?php
$sql = "SELECT * FROM duo_member";
$pre = $pdo -> prepare($sql);
$pre -> execute();
$listMember = $pre->fetchAll(PDO::FETCH_ASSOC);
?>
<ul>
    <?php
    foreach($listMember as $member)
    {
        echo "<li>N° ".$member['id']."<img src=\"".$member['pic']."\"";
        echo "<br>";
    };
    ?>
</ul>

<h3>Ajouter un membre</h3>
<form method="post" action="php/action/add_member.php" enctype="multipart/form-data">
    <input type="text" name="quote" value="Citation/Inspiration"><br>
    <textarea name="description" cols="30" rows="10">Description, backstory, blablabla...</textarea>
    <input type="file" name="pic">
    <input type="text" name="alt" value="Description de l'image"><br>

    <button type="submit">Ajouter à la BD</button>
</form>
