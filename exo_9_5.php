<?php

	$phrase = $_POST["phrase"];
	$remove = $_POST["remove"];
	$msg = $phrase.substr(0, $remove)."".$phrase.substr($remove+1);
	$sMessage = $msg;

     require "exo_9_5.html";
	 
?>