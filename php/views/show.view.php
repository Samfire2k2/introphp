<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infos du module</title>
</head>
<body>
     <?php if ( $_SERVER["REQUEST_METHOD"] == "POST"){
        ?>
    <h1>Informations du module</h1>
    <p>Code : <?= $module['code']; ?></p>
    <p>Nom : <?= $module['nom']; ?></p>
    <p>Responsable : <?= $module['responsable']; ?></p>
    <p>Email du Responsable : <?= $module['email_responsable']; ?></p>
    <p>Nombre d'heures de CM : <?= $module['cm']; ?></p>
    <p>Nombre d'heures de TD : <?= $module['td'];?></p>
    <p>Nombre d'heures de TP : <?= $module['tp']; ?></p>

<?php } ?>
</body>
</html>
