<?php
            $sMessage="";
            $i=0;
            $tab = [1, 3, 5, 7, 9];
            $tab2 = [2, 4, 6, 8, 10];
            $tab3 = [];
            $iStop =0;

            while (((count($tab) + count($tab2)) > 0)) {
                $iStop++;
                error_log("NB tab = " . count($tab) . " | NB tab2 = " . count($tab2));
                if (($tab[0] > $tab2[0]) && (isset($tab[0])) && (isset($tab2[0])))  {
                    $tab3[$i] = $tab2[0];
                    array_splice($tab2,0, 1);

                } else if (($tab[0] < $tab2[0]) && (isset($tab[0])) && (isset($tab2[0]))) {
                    $tab3[$i] = $tab[0];
                     array_splice($tab,0, 1);

                } else if (count($tab) == 0) {
                    $tab3[$i] = $tab2[0];
                     array_splice($tab2,0, 1);
                   } else {
                    $tab3[$i] =$tab[0];
                   array_splice($tab,0, 1);
                }
                $i++;

            }
          $sMessage=implode("|",$tab3);



     require "exo_7_7.html";
?>
