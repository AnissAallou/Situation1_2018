<?php 
	$aConfig= parse_ini_file("/home/jijou/files/config.ini", true);
	$aZero = [];
	
	for($i = 0; $i <= 6; $i++) {
		$aZero[$i] = 0;
	}
	
	require $aConfig["PATHS"]["PATH_HOME"] .
			$aConfig["PATHS"]["PATH_VIEW"] . "exo_6_1.html";
			
			
?>

// Contenu du fichier config.ini 
[PATHS]
PATH_HOME = /home/jijou/
PATH_VIEW = files/HTML
