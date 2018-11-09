<?php

if(isset($_POST['exec'])) {
$sToto ="";
$sTata ="";
$sTutu ="";
///////////////////////////////
$handle = fopen("Toto.txt","r");
while (!feof($handle)) {
	$sToto .=fgets($handle);
}
fclose($handle);
///////////////////////////////
$handle = fopen("Tutu.txt", "r+");
fwrite($handle, $sToto);
fclose($handle);
$sTemp = "";
///////////////////////////////
$handle = fopen("Tata.txt","r");
while (!feof($handle)) {
	$sTata .= fgets($handle);
}
fclose($handle);
//////////////////////////////
$handle = fopen("Tutu.txt", "a+");
fwrite($handle, $sTata);
fclose($handle);
//////////////////////////////
$handle = fopen("Tutu.txt", "r");
while (!feof($handle)) {
	$sTutu .=fgets($handle);
}
fclose($handle);
$sTutu = $sToto . $sTata;
$sMessage = "<br/>Le fichier concatené Tutu.txt est " .$sTutu;
}

require "exo_10_7.html";

	 
?>