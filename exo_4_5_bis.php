<?php

$sGenre = $_POST["sexe"];
$iAge = $_POST["age"];


if(isset($_POST["sexe"]) && isset($_POST["age"])) {
	if (($_POST["age"] > 18 && $_POST["sexe"] == 'homme' ) || (($_POST["age"] >= 14 && $_POST["age"] <= 16) && $_POST["sexe"] == 'homme') || $_POST["sexe"] == 'femme') {
			$sMessage = "Taxable";
		} else {
			$sMessage = "Non Taxable";
		}
}

require "exo_4_5_bis.html";
?>