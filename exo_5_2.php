<?php



$n = $_POST["n"];



if ($_POST["n"] < 10)	{
	$sMessage= "Plus grand !";
}  else if ($_POST["n"] > 20)  {
	$sMessage= "Plus petit !";
} else if ($_POST["n"]>=10 && $_POST["n"]<=20) {
			$sMessage="Nombre valide.";
		}




require "exo_5_2.html";
?>
