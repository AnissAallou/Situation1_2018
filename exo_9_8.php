<?php

	
	$Glup1 = rand() * 2;
	$Glup2 = rand() * 2 - 1;
	$Glup3 = rand() * 0.30 + 1.35;
	$Glup4 = intval((rand() * 6)) + 1;
	$Glup5 = rand() * 17 - 10.5;
	$Glup6 = intval(rand()*6) + intval(rand()*6) + 2; 

	$sMessage = "Glup aléatoire entre 0 et 2 = " . $Glup1 . "<br><br>Glup aléatoire entre -1 et 1 = " . $Glup2 . "<br><br>Glup aléatoire entre -1.35 et 1.65 = " . $Glup3 . "Glup émule un dé à six faces = " . $Glup4 . "<br><br>Glup aléatoire entre -10.5 et 6.5 = " . $Glup5 . "<br><br>Glup émule la somme du jet simultané de deux dés à six faces = " . $Glup6;

     require "exo_9_8.html";
	 
?>