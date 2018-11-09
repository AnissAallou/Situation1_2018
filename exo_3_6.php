<?php

if(isset($_POST["age"])) {
$age = $_POST["age"];
	if ($_POST["age"] >= 12) {
			$sMessage = "Catégorie Cadet";
		} else if ($_POST["age"] >= 10) {
			$sMessage = "Catégorie Minime";
		} else if ($_POST["age"] >= 8) {
			$sMessage = "Catégorie Pupille";
		} else if ($_POST["age"] >= 6) {
			$sMessage = "Catégorie Poussin";
		}
}

require "exo_3_6.html";
?>