<?php

$sResultatPHP = "";

if (isset($_POST["test_php"])) {
	$i = 0;
	$aFinalData = [];

	$handle = fopen("Tutu.txt", 'r');
	if ($handle) {
		while (!feof($handle)) {
			$buffer = fgets($handle);
			if ($buffer && preg_match("/[^@]+@[^@]+/",trim(substr($buffer, 35, 30)))) {
				$aFinalData[$i] = $buffer;
				$i++;
			}
		}
	}
	fclose($handle);

	fwrite(fopen("Tutu.txt","w"),implode("",$aFinalData));
}

$handle = fopen("Tutu.txt", 'r');
if ($handle) {
	while (!feof($handle))
	{
		$buffer = fgets($handle);
		if ($buffer) {
			$sLastName = trim(substr($buffer, 0, 20)," ");
			$sFirstName = trim(substr($buffer, 20, 15)," ");
			$sMail = trim(substr($buffer, 35, 30)," ");
			$sResultatPHP .= $sLastName . " " . $sFirstName . "<br>" . $sMail . "<br><br>";
		}
	}
	fclose($handle);
}

require "exo_10_8.html";

	 
?>