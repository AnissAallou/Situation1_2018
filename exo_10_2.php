<?php




$info = fopen("aniss.txt", 'r');

if ($info && isset($_POST["iReponseUser"])) {
	$sMessage = "";
	while (!feof($info))
	{
		$yes = fgets($info);
		$yes = str_replace("/"," ", $yes);
		$sMessage .= $yes . "<br>";
	}
	fclose($info);
}
     require "exo_10_2.html";
	 
?>