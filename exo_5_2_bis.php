<?php


$n = $_POST["n"];
$iCoup = 0;
$iAleatoire = rand( 1 , 100 );




    if ($_POST["n"] > $iAleatoire) {

       $sMessage = "Veuillez ecrire un chiffre plus petit";
        $iCoup++;


    } else if   ($_POST["n"] < $iAleatoire) {

		$sMessage = "Veuillez ecrire un chiffre plus grand";
        $iCoup++;

    } else {

        $sMessage = "Nombre valide";

    }



require "exo_5_2_bis.html";

?>
