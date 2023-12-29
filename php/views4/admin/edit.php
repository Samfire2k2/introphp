<?php
// FILEPATH: /c:/wamp64/www/TP_PHP_MIAGE/introphp/php/views4/admin/edit.php

// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer les données du formulaire
    $moduleID = $_POST['module_id'];
    $nomModule = $_POST['nom_module'];
    $description = $_POST['description'];

    // Effectuer les opérations de mise à jour dans la base de données
    // ...

    // Rediriger vers la page de liste des modules après la mise à jour
    header('Location: modules.php');
    exit;
}

// Récupérer l'ID du module à modifier
$moduleID = $_GET['id'];

// Récupérer les informations du module depuis la base de données
// ...

// Afficher le formulaire de modification
?>
<!DOCTYPE html>
<html>
<head>
    <title>Modifier le module</title>
</head>
<body>
    <h1>Modifier le module</h1>
    <form method="POST" action="">
        <input type="hidden" name="module_id" value="<?php echo $moduleID; ?>">
        <label for="nom_module">Nom du module:</label>
        <input type="text" name="nom_module" value="<?php echo $nomModule; ?>"><br>
        <label for="description">Description:</label>
        <textarea name="description"><?php echo $description; ?></textarea><br>
        <input type="submit" value="Enregistrer">
    </form>
</body>
</html>
