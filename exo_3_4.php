<?php

if(isset($_POST["n"])) {
$n = $_POST["n"];
	if ($_POST["n"] > 0) {
			$sMessage = "Ce nombre est positif";
		} else if ($_POST["n"] < 0) {
			$sMessage = "Ce nombre est négatif";
		} else {
			$sMessage = "Ce nombre est nul";
		}
	
}

require "exo_3_4.html";
?>