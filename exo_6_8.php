<?php
$i = $_POST["i"];
$iInput = $_POST["saisie"];
$notes = explode(" , ", $_POST["notes"]);
    
    if($i < 9){
        $notes[$i] =+ $iInput;
        $sText = "Vous avez saisi " . $notes[$i] +" (Saisie " + ($i+1) +"/9)";
        $i++;
    }else{
        foreach($notes as $iNote){
            $s = $s + $iNote;
        }
        
    $iAverage = $s/ $notes.length;
    $sText = "Votre moyenne est : " . iAverage ;
    
    }
   require "exo_6_8.html";

?>