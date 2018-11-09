<?php

$sResultatPHP = "";

if (isset($_POST["test_php"])) {
	$action = $_POST["action"];

	$handle = fopen("address.txt", 'r');

	if ($handle) {
		$i = 0;
		$aFinalData = [];
		while (!feof($handle)) {
			$buffer = fgets($handle);
			if ($buffer) {
				$aFinalData[$i] = $buffer;
				$i++;
			}
		}

		if ($action === "sort") {
			sort($aFinalData);
			$sResultatPHP = "Répertoire trié avec succès<br><br>";
		} else if ($action === "shuffle") {
			shuffle($aFinalData);
			$sResultatPHP = "Répertoire mélangé avec succès<br><br>";
		}
		
		fseek($handle,0);
		fwrite($handle,implode("",$aFinalData));

		fclose($handle);
	}
}

$handle = fopen("address.txt", 'r');

if ($handle) {
	$i = 0;
	$options = "";
	while (!feof($handle))
	{
		$buffer = fgets($handle);
		if ($buffer) {
			$sLastName = trim(substr($buffer, 0, 20)," ");
			$sFirstName = trim(substr($buffer, 20, 15)," ");
			$sStreet = trim(substr($buffer, 35, 30)," ");
			$sPC = trim(substr($buffer, 65, 5)," ");
			$sCity = trim(substr($buffer, 70, 20)," ");
			$sResultatPHP .= $sLastName . " " . $sFirstName . "<br>" . $sStreet . "<br>" . $sPC . " " . $sCity . "<br><br>";
			$options .= "<option value=\"" . $sLastName . " " . $sFirstName . "\">\n";
		}
	}
	fclose($handle);
}

require "exo_10_6.html";

	 
?>