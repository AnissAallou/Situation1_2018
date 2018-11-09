<?php
$hour = $_POST["hour"];
$min = $_POST["min"];
$sec = $_POST["sec"];

$sec++;

if ($sec == 60){
	$sec = 0;
	$min++;
	if($min == 60){
		$min = 0;
		$hour++;
	
		if($hour == 24){
			$hour = 0;
		}
	}
}
require "exo_4_3.html";
?>