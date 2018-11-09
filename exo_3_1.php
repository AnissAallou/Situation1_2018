<?php

if(isset($_POST["n"])) {
$n = $_POST["n"];
	if ($_POST["n"] > 0) {
			$sMessage = "Ce nombre est positif";
		} else {
			$sMessage = "Ce nombre est negatif";
		}
	
}



require "exo_3_1.html";

?>