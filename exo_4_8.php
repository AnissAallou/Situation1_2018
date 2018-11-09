<?php

	$j = $_POST["jour"];
	$m = $_POST["mois"];
	$a = $_POST["annee"];

	$bissextile = (($a % 4) == 0 && (($a % 100) != 0 || ($a % 400) == 0));
  $B1 = (($m == 1) ^ ($m == 3) ^ ($m == 5) ^ ($m == 7) ^ ($m == 8) ^ ($m == 10) ^ ($m == 12)) && (($j >= 1) && ($j <= 31));
	$B2 = (($m == 4 ^ $m == 6 ^ $m == 9 ^ $m == 11) && ($j >= 1 && $j <= 30));
	$B3 = (($m == 2 && $bissextile) && ($j >= 1 && $j <= 29));
	$B4 = (($m == 2) && ($j >= 1 && $j <= 28));

	if ($B1 || $B2 || $B3 || $B4) {
		$sMessage = "date valide";
	} else {
		$sMessage = "date invalide";
	}

require "exo_4_8.html";
?>
