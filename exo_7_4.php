<?php

    $tab = [12, 8, 4, 45, 64, 9, 2];
    $nombre = $_POST['iReponseUser'];
    array_splice($tab,$nombre,1);
  
    $sMessage= implode(" , ", $tab);


   require "exo_7_4.html";

?>