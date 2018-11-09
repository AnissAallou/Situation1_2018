<?php


if(isset($_POST["a"]) && isset($_POST["b"])) {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["c"];
		$d = $b;
		$b = $a;
		$a = $c;
		$c = $d;
}

$sMessage = "Resultat de a : " . $a . '</br>' . "Resultat de b : " . $b . '</br>' . "Resultat de c : " . $c;

require "exo_1_7.html";
?>
