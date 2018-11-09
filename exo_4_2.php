<?php

$hour = $_POST["hour"];
$min = $_POST["min"];

$min++;

if($min == 60){
    $min = 0;
	$hour++;
    if($hour == 24){
        $hour = 0;
    }
}


require "exo_4_2.html";
?>