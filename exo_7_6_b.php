<?php 
            $sMessage="";
            
            $aTab = array(-7, 4, 3, 11, 27);
            $i=0;
            $iMin = 4;
            $iMax = 0;
            
            for ($i = 1; $i <= count($aTab); $i++) {
                if ($aTab[$i] > $iMax) {
                    $iMax = $aTab[$i];
                } else if ($aTab[$i] < $iMin) {
                    $iMin = $aTab[$i];
                }
            }

            $sMessage= ("Dans le tableau : " . count($aTab) . " l'ecart est de  : " . ($iMax - $iMin));

        

     require "exo_7_6_a.html";
?>
