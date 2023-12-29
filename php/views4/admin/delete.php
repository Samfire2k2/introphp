<?php
// Vérifier si l'ID du module est passé en paramètre
if (isset($_GET['id'])) {
    $moduleId = $_GET['id'];

    // Supprimer le module avec l'ID spécifié
    // Code pour supprimer le module avec l'ID $moduleId

    // Rediriger vers une page de confirmation
    header("Location: modules.php?deleted=true");
    exit;
} else {
    // Si aucun ID n'est passé en paramètre, rediriger vers une page d'erreur
    header("Location: error.php");
    exit;
}
?>
