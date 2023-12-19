<?php
// index.view.php
$json = file_get_contents('data/modules.json');
$modules = json_decode($json, true);

$param_vue = array(
    'titre' => 'Titre de la page',
    'modules' => $modules
);

view('views4/layout.views.php', $param_vue);
?>