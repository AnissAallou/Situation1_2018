<?php

	$phrase = $_POST["phrase"];
	
	$n = str_word_count($phrase);
	

	
	$sMessage = "Cette phrase compte " . $n . " mot(s)";

     require "exo_9_3.html";
	 
?>