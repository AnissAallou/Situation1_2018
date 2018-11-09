<?php

if(isset($_POST["nombre"])) {
	//if ($_POST["puissance"] < 4) {
		$nombre = $_POST["nombre"];
		//$puissance = $_POST["puissance"];//
		
		if(isset($_POST["carre"])) {
			$carre = $_POST["carre"];
			//$puissance++;//
			$carre = $nombre * $nombre;
		} else {
			$carre = $nombre * $nombre;
		}
	//}
}

require "exo_2_2.html";
?>