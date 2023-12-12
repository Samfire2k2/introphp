<?php
function getModules() {
    return array(
        array("Code" => "XLG5IE230", "Nom" => "Comptabilité financière", "Responsable" => "Christophe SUAUDEAU", "CM" => "0h", "TD" => "44h", "TP" => "0h", "TD_Groupes" => 5, "TP_Groupes" => 3),
        array("Code" => "XLG5IE020", "Nom" => "Ingénierie des exigences", "Responsable" => "Géraldine JEAN", "CM" => "13h20", "TD" => "22h40", "TP" => "8h", "TD_Groupes" => 4, "TP_Groupes" => 2),
        array("Code" => "XLG5IU260", "Nom" => "BD et Web", "Responsable" => "Laura MONCEAUX", "CM" => "0h", "TD" => "24h", "TP" => "16h", "TD_Groupes" => 6, "TP_Groupes" => 5),
    );
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
//$modules = getModules();
//view('views/index.view.php', array(), true);

//Méthode 2 - utilisation fonction vue avec données passées en paramètres
//$autreDonnee = array('title' => 'Ma page', 'content' => 'Contenu de $autreDonnee.');
//view('views/other.view.php', $autreDonnee);

/*La première méthode 1 est moins flexible puisqu'elle ne permet
de passer que des variables globales et sont exposées à la vue, ce qui est
moins sécurisant.

La deuxième méthode quant à elle permet de passer les données de n'importe
quel type en paramètres à la vue et est plus sécurisée, dans le sens
où elle évite d'exposer les variables globales à la vue.*/


?>