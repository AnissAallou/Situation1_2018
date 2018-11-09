<?php

$sMessage= "";



if(isset($_POST["a"]) && isset($_POST["b"])) {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$a = $b;
		$b = $a;		
}

$sMessage = "Resultat de a : " . $a . '</br>' . "Resultat de b : " . $b;

require "exo_1_5.html";
?>