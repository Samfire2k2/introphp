<?php

include 'inc4/functions.php';

// Traiter les données du formulaire
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = sanitize('code');
    $nom = sanitize('nom');
    $responsable = sanitize('responsable');
    $email_responsable = sanitize('email_responsable', FILTER_SANITIZE_EMAIL);
    $cm = sanitize('cm');
    $td = sanitize('td');
    $tp = sanitize('tp');

    // Charger la vue show avec les données du module
    view('views4/show.view.php', compact('code', 'nom', 'responsable', 'email_responsable', 'cm', 'td', 'tp'));
}

?>
