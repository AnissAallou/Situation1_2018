<?php


    // get user "name requested" and replacement
    $sName = $_POST["sName"];
    $sNamefirst = $_POST["sNamefirst"];
    $sContent= "";

    $bMIA = false; // init
    $handle = fopen("exo105.txt","r");  // open file
    if ($handle) { // if open succeded
        while (!feof($handle)) { // run whole file
            $buffer = fgets($handle);   // get current line
            if ($sNameSeeked . "\n" == $buffer) { // if current name == name seeked . "\n"
                $sContent .= $sNamefirst . "\n";  // concat line with sNameSwap
                $bMIA = true;
            }else {
                $sContent .= $buffer; // concat line with regular old name
            }
        }
        fclose($handle);  // close request
        if ($bMIA == false) { // if name has not been found
            $sM = "NOT FOUND";
        }
    }
    $handle = fopen('exo105.txt', 'r'); // re-write the whole file
    if ($handle) {
        fputs($handle, $sContent);
        fclose($handle);
    }

require "exo_10_5.html";
?>