<?php

	$iInput = $_POST["saisie"];
	$sText;
	$i = $_POST["i"];
	$j = $_POST["j"];
	$k = $_POST["k"];
	$number = $_POST["number"];
	$n = $_POST["n"];
	$suivant = $_POST["suivant"];
	$tab = explode(" , ", $_POST["tab"]);
    $k = 1;
    $suivant = true;
    
    $n = "Combien t'en veux ?";

    $number = "Entrez la valeur n°1";
    $tab[0] = $number;

    for ($i=1; $i<$n; $i++) {
        $number = ("Entrez la valeur n°"+ ($i+1) +" :");
        $j = $tab.length;
        
        while ($tab[$j-1]>$number) {
            $tab[$j] = $tab[$j-1];
            $j--;
        }
        $tab[$j] = $number;
    }
    

    while ($k < ($tab.length) && $suivant==true) {
        ($tab[$k]!=($tab[$k-1])+1) ? $suivant = false : "";
        $k++;
    } 
    $suivant ? $sText = "Valeurs dans l'ordre : " . $tab . "\nLes entiers sont consécutifs." : $sText = "Valeurs : " . $tab . "\nLes entiers sont non-consécutifs.";


require "exo_7_1.html";


?>