<?php
$photocopies = $_POST["photocopies"];
$prix1 = 0.1 ;
$prix2 = 0.09 ;
$prix3 = 0.08 ;

 if (($photocopies > 0) && ($photocopies <= 10)){
    $prixTotal = ($photocopies * $prix1);
 
 }else if (($photocopies > 10) && ($photocopies <= 20)){
     $prixTotal = (10 * $prix1)+ (($photocopies - 10) * $prix2);
 
 }else if ($photocopies > 20){
     $prixTotal = (10 * $prix1) + (10 * $prix2) + (($photocopies - 20) * $prix3);
 }

$prixTotal = number_format($prixTotal, 2, ".", "");
     

require "exo_4_4.html";
?>