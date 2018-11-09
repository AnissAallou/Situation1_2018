<?php
$n= $_POST["n"];


if (($_POST["n"] < 1) || ($_POST["n"] > 3))	{
	$sMessage= "Saisie erronnée. Recommencez.";
}  else if (($_POST["n"] >= 1) && ($_POST["n"] <= 3))  {
	$sMessage= "Nombre valide.";
}





require "exo_5_1.html";
?>
