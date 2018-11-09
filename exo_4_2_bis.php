<?php

$jour = $_POST["jour"];
$mois = $_POST["mois"];

$jour++;

if($jour > 30){
    $jour = 1;
	$mois++;
}
if($mois > 12){
    $mois = 1;
}
if ($jour > 28 && $mois == 2) {
	 $jour = 1;
	 $mois++;
}


require "exo_4_2_bis.html";
?>