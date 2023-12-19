<?php
// admin/create.php

// Include the configuration file
include '../../inc4/config.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the submitted data
    $newModule = array(
        'code' => $_POST['code'],
        'nom' => $_POST['nom'],
        'responsable' => $_POST['responsable'],
        'email' => $_POST['email'],
        'CM' => $_POST['CM'],
        'TD' => $_POST['TD'],
        'TP' => $_POST['TP']    
    );

    // Load the existing modules
    $json = file_get_contents(DATA_FILE);
    $modules = json_decode($json, true);

    // Add the new module
    $modules[] = $newModule;

    // Save the updated modules back to the JSON file
    file_put_contents(DATA_FILE, json_encode($modules));

    // Redirect to the index page
    header('Location: ../index.view.php');
    exit;
}

// Display the form
?>
<form method="post">
    <label for="code">Code:</label>
    <input type="text" id="code" name="code" required>

    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom" required>

    <label for="responsable">Responsable:</label>
    <input type="text" id="responsable" name="responsable" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="CM">CM:</label>
    <input type="number" id="CM" name="CM" required>

    <label for="TD">TD:</label>
    <input type="number" id="TD" name="TD" required>

    <label for="TP">TP:</label>
    <input type="number" id="TP" name="TP" required>

    <input type="submit" value="Submit">
</form>