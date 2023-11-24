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
?>