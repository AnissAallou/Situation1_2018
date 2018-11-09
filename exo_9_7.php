<?php

$n = $_POST["n"];

if (($n%2 == 1) || ($n%2 == -1)) {
   $sMessage = "Ce nombre est impair";
} else {
   $sMessage = "Ce nombre est pair";
}
     require "exo_9_7.html";

?>
