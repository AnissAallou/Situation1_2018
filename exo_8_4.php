<?php
$sM = "";



	$T = [];
	$sM = "";

	$Val = 1;
	for ($k=0; $k<=3; $k++) {
		$T[$k] = [];
		for ($m=0; $m<=1; $m++) {
			$T[$k][$m] = $k + $m;
		}
	}
	for ($k=0; $k<=3; $k++) {
		for ($m=0; $m<=1; $m++) {
			$sM = $sM . $T[$k][$m] ." ";
		}
	}

	
	require "exo_8_4.html";
?>





