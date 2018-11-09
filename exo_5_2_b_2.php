<?php

$iReponseUser = $_POST['iReponseUser'];

$nombre_hasard = Math.floor(Math.random() * 101);
$n = "Entrez un nombre au hasard compris entre 1 et 100";
	
	
	while (($n<1) || ($n>100)) {
		echo "Entre 1 et 100 je t'ai dit :D";
	}
	
	while ($n > $nombre_hasard) {
		echo "Plus petit";
		
	}
	
	while ($n < $nombre_hasard) {
		echo "Plus grand";
		
	}
	
	if ($n == $nombre_hasard) {
		echo  "GG t'as géré :p";
	}
		



 ?>



   