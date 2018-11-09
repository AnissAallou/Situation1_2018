<?php




if(isset($_POST["a"]) && isset($_POST["b"])) {
		$a = $_POST["a"] + 1;
		$b = $a - 4;
}

$sMessage = "Resultat de a : " . $a . '</br>' . "Resultat de b : " . $b;

require "exo_1_3.html";
?>
