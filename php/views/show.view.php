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
    
    <p>Code : <?= $code ?></p>
    <p>Nom : <?= $nom ?></p>
    <p>Responsable : <?= $responsable ?></p>
    <p>Email du Responsable : <?= $email_responsable ?></p>
    <p>Nombre d'heures de CM : <?= $cm ?></p>
    <p>Nombre d'heures de TD : <?= $td ?></p>
    <p>Nombre d'heures de TP : <?= $tp ?></p>
    <?php } ?>
</body>
</html>
