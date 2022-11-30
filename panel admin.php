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
        echo "<li>".$project['project_title']."<\li>";
    };
    ?>
</ul>