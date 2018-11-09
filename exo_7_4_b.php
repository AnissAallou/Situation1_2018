<?php 

    $aTab = [12, 8, 4, 45, 64, 9, 2];
    $iNombre = $_POST['iReponseUser'];
    array_splice($aTab,$iNombre,1);
  
    $sMessage= implode(" , ", $aTab);

    require "exo_7_4_a.html";
?>
