<?php

            $age = $_POST["age"];
            $permis = $_POST["permis"];
            $accident = $_POST["accident"];
            $assurance = $_POST["assurance"];

            if ((($age < 25) && ($permis < 2) &&  ($accident == 0)) || (($age < 25) && ($permis > 2) && ($accident == 1)) || (($age > 25) && ($permis > 2) && ($accident == 1)) || (($age > 25) && ($permis < 2) && ($accident == 2))) {

                $sMessage = "Rouge";

            } else if ((($age < 25) && ($permis > 2) && ($accident == 0)) || (($age > 25) && ($permis < 2) && ($accident == 0)) || (($age > 25) && ($permis > 2) && ($accident == 1)) || (($age < 25) && ($permis < 2) && ($accident == 0) && ($assurance > 5)) || (($age < 25) && ($permis > 2) && ($accident = 1) && ($assurance > 5)) || (($age > 25) && ($permis > 2) && ($accident == 1) && ($assurance > 5)) || (($age > 25) && ($permis > 2) && ($accident == 0) && ($assurance > 5))) {

                $sMessage = "Orange";

            } else if ((($age > 25) && ($permis > 2) && ($accident == 0)) || (($age < 25) && ($permis > 2) && ($accident == 0) && ($assurance > 5)) || (($age > 25) && ($permis < 2) && ($accident == 0) && ($assurance > 5)) || (($age > 25) && ($permis > 2) && ($accident == 1) && ($assurance > 5))) {

                $sMessage = "Vert";

            } else if (($age > 25) && ($permis > 2) && ($accident == 0) && ($assurance > 5)) {

                $sMessage = "Bleu";

            } else {

                $sMessage = "Refusé";
            }

require "exo_4_7.html";
?>