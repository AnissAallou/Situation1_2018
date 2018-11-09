<?php 
        $sMessage="";
         $dico = array("bye", "naruto", "itachi", "tchao");
          $max = 4 - 1;
         $min = 0;
          $test = ($min + $max) / 2;
          $flag = false;

            $iSaisie = $_POST['iReponseUser'];
            do {

                if ($iSaisie < $dico[$test]) {
                    $max = $test - 1;
                } else {
                    $min = $test + 1;
                }
                $flag = $iSaisie && $dico[$test];

            } while ($flag = false);

            if ($iSaisie == $dico[$test]) {
             $sMessage =("C'est bien un mot du dico");
            } else {
             $sMessage =("Il n'est pas dans le dico");

            }
     require "exo_7_5.html";
?>