<?php

include 'inc2/functions.php';

// Traiter les données du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['code'];
    $nom = $_POST['nom'];
    $responsable = $_POST['responsable'];
    $email_responsable = $_POST['email_responsable'];
    $cm = $_POST['cm'];
    $td = $_POST['td'];
    $tp = $_POST['tp'];

    // Charger la vue show avec les données du module
    view('views3/show.view.php', compact('code', 'nom', 'responsable', 'email_responsable', 'cm', 'td', 'tp'));
}

?>
