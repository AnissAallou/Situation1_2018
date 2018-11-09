<?php




$info = fopen("aniss.txt", 'r');

if ($info && isset($_POST["iReponseUser"])) {
	$sMessage = "";
	while (!feof($info))
	{
		$fuckyou = fgets($info);
		$fuckyou = str_replace("/"," ", $fuckyou);
		$sMessage .= $fuckyou . "<br>";
	}
	fclose($info);
}
     require "exo_10_2.html";
	 
?>