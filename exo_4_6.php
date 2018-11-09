<?php

	$var1 = $_POST["var1"];
	$var2 = $_POST["var2"];
	$var3 = $_POST["var3"];
	$var4 = $_POST["var4"];


	if ($var1 > 50) {
		$sMessage = "Elu au premier tour";
	}
	if ((($var2 > 50) || ($var3 > 50) || ($var4 > 50)) || ($var1 < 12.5)) {
		$sMessage = "Battu, éliminé, sorti !!!";

	}
	if (($var1 > $var2) && ($var1 > $var3) && ($var1 > $var4)) {
		$sMessage = "Ballotage favorable";
	} else {
		$sMessage = "Ballotage défavorable";
	}

require "exo_4_6.html";
?>
