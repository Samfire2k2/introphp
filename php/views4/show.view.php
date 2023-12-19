<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infos du module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
    <h1>Informations du module</h1>

<table class="table">
<thead>
    <tr>
        <th>Code</th>
        <th>Nom</th>
        <th>Responsable</th>
        <th>Email du Responsable</th>
        <th>Nombre d'heures de CM</th>
        <th>Nombre d'heures de TD</th>
        <th>Nombre d'heures de TP</th>
    </tr>
</thead>
<tbody>

    <tr>
        <td><?= isset($code) ? $code : '' ?></td>
        <td><?= isset($nom) ? $nom : ''?></td>
        <td><?= isset($responsable) ? $responsable : '' ?></td>
        <td><?= isset($email_responsable) ? $email_responsable : '' ?></td>
        <td><?= isset($cm) ? $cm : '' ?></td>
        <td><?= isset($td) ? $td : '' ?></td>
        <td><?= isset($tp) ? $tp : '' ?></td>
    </tr>
</tbody>
</table>
</body>
<?php endif; ?>
</html>
