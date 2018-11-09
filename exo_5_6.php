<?php

$n = $_POST["n"];

for($i=1; $i<=$n; $i++) {
	$somme = $somme + $i;
}

$sMessage = "$somme";

require "exo_5_6.html";
?>