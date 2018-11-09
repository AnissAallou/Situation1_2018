<?php

	$phrase = $_POST["phrase"];





	$n=0;


	for($i=0; $i<=strlen($phrase); $i++) {
	  if ($phrase[$i] == 'a' || $phrase[$i] == 'e' || $phrase[$i] == 'i' || $phrase[$i] == 'o' || $phrase[$i] == 'u' || $phrase[$i] == 'y') {
		$phrase = $n++;
	  }
	}


	$sMessage= "Cette phrase compte " . $n . " voyelles";

    require "exo_9_4.html";

?>
