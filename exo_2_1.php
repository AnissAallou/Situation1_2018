<?php


if(isset($_POST["valeur"])) {

		$valeur = $_POST["valeur"];
		$double = $valeur * 2;

}

$sMessage="Valeur double : " . $double;

require "exo_2_1.html";
?>
