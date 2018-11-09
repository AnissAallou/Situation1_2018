<?php

	$tab = [1000];
	$n = $_POST["n"];

	for ($i=0;$i<=20;$i++) {
									$tab[$i+1] = $tab[$i] + $tab[$i] * 0.0275;
						if($n<0) {
									$sMessage = "Entre 0 et 20 ans : ";
								}

						if($n>20) {
									$sMessage = "Entre 0 et 20 ans :";
								}
							}



	$sMessage = "Il y aura " . number_format($tab[$n],2) . "€ sur le compte pour ses " . $n . " an(s).";

	require "exo_6_15.html";

?>
