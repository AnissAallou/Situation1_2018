<?php

	$i = 1;

	$n1 = $_POST["n1"];
	$n2 = $_POST["n2"];


	$a = 1;
	$b = 1;

	for ($i = 1; $i <= $n2; $i++) {
		$a = $a * ($i + $n1 - $n2);
		$b = $b * $i;
	}

	$b = $a/$b;
	$sMessage1 = "une chance sur " . $a;
	$sMessage2 = "une chance sur " . $b;

require "exo_5_11.html";
?>
