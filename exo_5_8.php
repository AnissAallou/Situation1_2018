<?php

$n = $_POST["n"];
$position = 1;
$i=1;
	for($i=2; $i <= 20; $i++) {
		$n + $i;
		}
		if ($i==1 || $n > $plusgrand) {
			$plusgrand = $n;
			$position = $i;
		}


	$sMessage = "Le plus grand nombre est " . $plusgrand . " " . "et il a été tapé à la position" . " " . $position;

require "exo_5_8.html";


?>
