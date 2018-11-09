<?php



    // getters
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $adresse = $_POST['adresse'];
    $cp = $_POST['cp'];
    $ville = $_POST['ville'];
    //
    $req = fopen('adresse.txt', 'a');
    if ($req) {
        $entry = str_pad($_POST['nom'], 20, " ");
        $entry .= str_pad($_POST['prenom'], 20, " ");
        $entry .= str_pad($_POST['adresse'], 50, " ");
        $entry .= str_pad($_POST['cp'], 5, " ");
        $entry .= str_pad($_POST['ville'], 20, " ") . "\n";
        fwrite($req, $entry);
    }
    fclose($req);


$req = fopen('adresse.txt', 'r');
if ($req) {
    while (!feof($req)) {
        $getEntry = fgets($req);
        if ($getEntry) {
            $sNom = trim(substr($getEntry, 0,20)," ");
            $sPrenom = trim(substr($getEntry, 20,20), " ");
            $sAdresse = trim(substr($getEntry, 40,50), " ");
            $sCp = trim(substr($getEntry, 90,5), " ");
            $sVille = trim(substr($getEntry, 95,20), " ");
            $sM .= $sNom ." ". $sPrenom ." ". $sAdresse ." ". $sCp ." ". $sVille . "<br>";
        }

    }
    fclose($req);
}

$sM = "";

require "exo_10_3.html";

	 
?>