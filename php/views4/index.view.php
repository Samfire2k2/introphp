<?php
//include 'inc4/config.php';
// index.view.php
$json = file_get_contents(MODULES_JSON_PATH);
$modules = json_decode($json, true);

$param_vue = array(
    'titre' => 'Titre de la page',
    'modules' => $modules
);

view('views4/layout.views.php', $param_vue);
?>