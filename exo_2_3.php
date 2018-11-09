<?php



$prixHT = $_POST["prixHT"];
$nbArt = $_POST["nbArt"];
$TVA = $_POST["TVA"];
$TTC = ($prixHT * (1 + ($TVA/100))) * $nbArt;



$sMessage="Le prix de vos achats est de : " . $TTC;

require "exo_2_3.html";
?>
