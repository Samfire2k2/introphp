<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Infos du module</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
<body>

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
<?php 
$Searchcode = isset($_POST['Searchcode']) ? $_POST['Searchcode'] : '';
$Searchname = isset($_POST['Searchname']) ? $_POST['Searchname'] : '';
foreach ($modules as $module):
    if ($Searchcode == $module['code'] || $Searchname == $module['nom']) {?>
      <tr>
        <td><?= $module['code'] ?></td>
        <td><?= $module['nom'] ?></td>
        <td><?= $module['responsable'] ?></td>
        <td><?= $module['email'] ?></td>
        <td><?= $module['CM'] ?></td>
        <td><?= $module['TD'] ?></td>
        <td><?= $module['TP'] ?></td>
    </tr>
    <?php } ?>
    <?php endforeach; ?>
</tbody>
</table>
</body>
<?php endif; ?>
</html>
