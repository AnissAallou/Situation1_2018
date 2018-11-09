<?php

if (isset($_POST["test_php"])) {
	$i = 0;
	$aSellerCount = [];

	$handle = fopen("Exo_10_9.txt", 'r');
	if ($handle) {
		while (!feof($handle)) {
			$buffer = fgets($handle);
			if ($buffer) {
				$aLineData = explode("|",$buffer);
				if (isset($sSellerCount[$i-1]) && $sSellerCount[$i-1]["Seller"] === $aLineData[0]) {
					$sSellerCount[$i-1]["Amount"] += intval($aLineData[1]);
				} else {
					$sSellerCount[$i]["Seller"] = $aLineData[0];
					$sSellerCount[$i]["Amount"] = intval($aLineData[1]);
					$i++;
				}
			}
		}
	}
	fclose($handle);

	$sResultatPHP = "";
	for ($i = 0; $i < count($sSellerCount); $i++) {
		$sResultatPHP .= $sSellerCount[$i]["Seller"] . ": " . $sSellerCount[$i]["Amount"] ."€<br>";
	}
}

$handle = fopen("Exo_10_9.txt", 'r');
if ($handle) {
	$sMessage = "";
	while (!feof($handle)) {
		$buffer = fgets($handle);
		if ($buffer) {
			$sMessage .= $buffer . "<br>";
		}
	}
	fclose($handle);
}

require "exo_10_9.html";

	 
?>