<?php

$n = $_POST["n"];
$f=1;

for($i=1; $i<=$n; $i++) {
	$f = $f * $i;
}

$sMessage = $f;

require "exo_5_7.html";
?>