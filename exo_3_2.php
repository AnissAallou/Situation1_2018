<?php

if(isset($_POST["n1"]) && isset($_POST["n2"])) {
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
	if (($_POST["n1"] > 0 && $_POST["n2"] > 0) || ($_POST["n1"] < 0 && $_POST["n2"] < 0)) {
			$sMessage = "Leur produit est positif";
		} else {
			$sMessage = "Leur produit est négatif";
		}

}

require "exo_3_2.html";
?>
