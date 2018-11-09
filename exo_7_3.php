<?php 

            $tab = [0, 1, 2, 3, 4, 5, 6];


            $i =0;
            $j = count($tab) - 1;
            $temp;
            $n = 6;
            
            for ($i = 0; $i < count($tab) / 2; $i++) {
                if ($j > 0) {
                    $temp = $tab[$j];
                    $tab[$j] = $tab[$i];
                    $tab[$i] = $temp;
                    $j--;
                }
            }
           $sMessage = implode(',',$tab);
        

     require "exo_7_3.html";
?>