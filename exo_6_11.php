<?php
	$tabA = [4,8,7,12];
	$tabB = [3,6];
	$S = 0;
	
	
	
	for($i=0; $i<=3; $i++) {
		for($j=0; $j<=1; $j++) {
			$S = $S + $tabA[$i] * $tabB[$j];
		}
	}
	
	
	
	$sMessage = "Toon : " + $S;
	
   require "exo_6_11.html";

?>