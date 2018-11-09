<?php

$a = 1;
$b = 2;
$c = 3;
$d;

$sina = sin($b); // OK //
$sina2 = sin($a+$b*$c); // OK //
$b1 = sin($a)- sin($d); // d est une chaîne de caractère donc ça marche pas" //
$c1 = sin($a/$b); // à vérifier que b ne soit pas repris du résultat de l'opération précédente avec d la maudite variable en String //
 // si b est différent de zéro tout marche sur des roulettes //
$c2 = cos(sin($a)); // l'absence de parenthèse fermante à cos(sin(a) provoque une erreur"

$sMessage = "a = sin(b) = " . $sina . "</br> </br>" . "a = sin(a+b*c) = " . $sina2 ."</br> </br>" . "b = sin(a) - sin(d) = " . $b1 ."</br> </br>". "c = sin(a/b) = " . $c1 ."</br> </br>". "c = cos(sin(a) = " .  $c2;

require "exo_9_1.html";
	 
?>