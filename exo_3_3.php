<?php

if(isset($_POST["n1"]) && isset($_POST["n2"]) && isset($_POST["n3"])) {
$n1 = $_POST["n1"];
$n2 = $_POST["n2"];
$n3 = $_POST["n3"];
	if (($_POST["n1"] < $_POST["n2"]) && ($_POST["n2"] < $_POST["n3"])) {
			$sMessage = "Ces noms sont classés alphabetiquement";
		} else {
			$sMessage = "Ces noms ne sont pas classés";
		}

}

require "exo_3_3.html";
?>
