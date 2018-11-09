<?php

	$max = "";
	$min = "";
	$tab = [];
	$tab[0] = [0, 1, 2, 3, 4, 5, 6, 7];
	$tab[1] = [8, 9, 10, 11, 12, 13, 14, 15];
	$tab[2] = [16, 17, 18, 19, 20, 21, 22, 23];
	$tab[3] = [24, 25, 26, 27, 28, 29, 30, 31];
	$tab[4] = [32, 33, 34, 35, 36, 37, 38, 39];
	$tab[5] = [40, 41, 42, 43, 44, 45, 46, 47];
	$tab[6] = [48, 49, 50, 51, 52, 53, 54, 55];
	$tab[7] = [56, 57, 58, 59, 60, 61, 62, 63];
	$tab[8] = [64, 65, 66, 67, 68, 69, 70, 71];
	$tab[9] = [72, 73, 74, 75, 76, 77, 78, 79];
	$tab[10] = [80, 81, 82, 83, 84, 85, 86, 87];
	$tab[11] = [88, 89, 90, 91, 92, 93, 94, 95];
	$imax=0;
	$jmax=0;
	$imin=0;
	$jmin=0;

	
	for($i=0; $i<=12; $i++) {
	  for($j=0; $j<=8; $j++) {
		($tab[$i][$j] > $max) ? $max = $tab[$i][$j] : "";
		$imax = $i;
		$jmax = $j;		
		}
	  }
	  
	for($k=0; $k<=0; $k++) {
	  for($l=0; $l<=0; $l++) {
		$min=0;
		$imin = $k;
		$jmin = $l;
		}
		
	  }

	
	$sM = "Le plus grand élément est " . $max . " et il se trouve à la ligne " . $imax . " et à la colonne " . $jmax . " </br> et le plus petit élément est " . $min . " et il se trouve à la ligne " . $k . " et à la colonne " . $l;

	require "exo_8_6.html";
		
		

?>