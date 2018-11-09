<?php

$sGenre = $_POST["sexe"];
$iAge = $_POST["age"];


if(isset($_POST["sexe"]) && isset($_POST["age"])) {
	if ((($_POST["age"] >= 18 && $_POST["age"] <= 35) && $_POST["sexe"] == 'femme' ) || ($_POST["age"] > 20 && $_POST["sexe"] == 'homme')) {
			$sMessage = "Imposable";
		} else {
			$sMessage = "Non Imposable";
		}
}

require "exo_4_5.html";
?>