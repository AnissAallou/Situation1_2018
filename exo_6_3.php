<?php

$notes = [];
$i;

for($i=0; $i<=8; $i++) {
	$notes[$i] =+ prompt("Entrez la note numéro : " + ($i + 1));

}

$sMessage = $notes;

require "exo_6_3.html";
?>
