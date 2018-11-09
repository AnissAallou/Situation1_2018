<?php

$sMessage= "";

$c = "";

if(isset($_POST["a"]) && isset($_POST["b"])) {
	if (($_POST["a"] >= 0) && ($_POST["b"] >= 0)) {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["a"] + $_POST["b"];
		} else if (($_POST["a"] < 0) && ($_POST["b"] < 0)) {
		$a = $_POST["a"];
		$b = $_POST["b"];
		$c = $_POST["b"] - $_POST["a"];
		}
		
}

$sMessage = $c;

require "exo_1_2.html";
?>