<?php

$tab7= [];

if(isset($_POST["i"])) {

	$i = $_POST["i"];
	for ($iCount= 0; $iCount < $i; $iCount++)	{
		$tab7[$iCount]= 0;
		error_log($iCount . " = " . $tab7[$iCount]);
	}
}


require "exo_6_1.html";
?>
