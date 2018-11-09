<?php

	$sUser = $_POST["sUser"];
	split_sUser = sUser.split("");

	for ($i=0; $i<$sUser.length; $i++) {
		$x = split_sUser[$i].charCodeAt(0);
		$x++;
		$y = String.fromCharCode($x);
		$sM = $sM + $y;
	}
	$sMessage = $sM;

     require "exo_9_6.html";
	 
?>