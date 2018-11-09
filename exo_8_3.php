<?php

	$x = [];
	$val=1;

	for($i=0; $i<=1; $i++) {
		$x[$i]= [];
		for($j=0; $j<=2; $j++) {
			$x[$i][$j] = $val;
			$val++;
		}
	}

	for($j=0; $j<=2; $j++) {
		for($i=0; $i<=1; $i++) {
			$sMessage.= $x[$i][$j];

		}
	}





	require "exo_8_3.html";

?>
