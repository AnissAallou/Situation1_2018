<?php

$photocopies = $_POST["photocopies"];
$prix50 = 50 * 0.25 ;
$prix100 = 50 * 0.20 + $prix50 ;

 if ($photocopies <= 50){
    $prixTotal = ($photocopies * 0.25);
 
 }else if (($photocopies > 50) && ($photocopies <= 100)){
     $prixTotal = (($photocopies - 50) * 0.20 + $prix50);
 
 }else if ($photocopies > 100){
     $prixTotal = (($photocopies - 100) * 0.10 + $prix100);
 }

$prixTotal = number_format($prixTotal, 2, ".", "");

require "exo_4_4_bis.html";
?>