<?php

$sMessage= "";

$c="";

if(isset($_POST["a"]) && isset($_POST["b"])) {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $a;
		$a = $b;
		$b = $c;		
}

$sMessage = "Resultat de a : " . $a . '</br>' . "Resultat de b : " . $b;

require "exo_1_6.html";
?>