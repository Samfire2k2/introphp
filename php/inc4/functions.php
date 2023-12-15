<?php
function getModules() {

    $jsonFilePath = MODULES_JSON_PATH;

    if (file_exists($jsonFilePath)) {
        $jsonContent = file_get_contents($jsonFilePath);

        $modulesData = json_decode($jsonContent, true);

        if ($modulesData !== null) {
            return $modulesData;
        } else {
            die('Erreur lors du décodage du fichier JSON.');
        }
    } else {
        die('Le fichier JSON est inexistant.');
    }
}


function showArray($array) {
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}


function view($viewPath, $data = array(), $varGlobale = false) {
    extract($data);

    if ($varGlobale) {
        global $modules;
    }


    include $viewPath;
}

//Méthode 1 - utilisation fonction vue avec variables globales
$modules = getModules();
view('views3/index.view.php', array(), true);

function sanitize($name, $type = FILTER_SANITIZE_STRING) {
    return filter_input(INPUT_POST, $name, $type);
}
?>