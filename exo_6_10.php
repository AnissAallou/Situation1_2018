<?php


	$tabA = [4,8,7,9,1,5,4,6];
	$tabB = [7,6,5,2,1,3,7,4];
	$i=0;
	$tabAB = [];
	
	
	
	for($i=0; $i<=7; $i++) {
			$tabAB[$i] = $tabA[$i] + $tabB[$i];
	}
	
	$sMessage = $tabAB;

	

   require "exo_6_10.html";

?>