<?php

$n = $_POST["n"];

	
	while ($n != 0) {                           
		$i = $i + 1;
		if ($n > $plusgrand) {
			$plusgrand = $n;
			$position = $i;
		}
	}
	
	$sMessage = "Le plus grand nombre est " . $plusgrand . " " . "et il a été tapé à la position" . " " . $position;
	

require "exo_5_9.html";
?>