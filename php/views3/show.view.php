<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infos du module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Informations du module</h1>

    <p>Code : <?= $code ?></p>
    <p>Nom : <?= $nom ?></p>
    <p>Responsable : <?= $responsable ?></p>
    <p>Email du Responsable : <?= $email_responsable ?></p>
    <p>Nombre d'heures de CM : <?= $cm ?></p>
    <p>Nombre d'heures de TD : <?= $td ?></p>
    <p>Nombre d'heures de TP : <?= $tp ?></p>
</body>
</html>
