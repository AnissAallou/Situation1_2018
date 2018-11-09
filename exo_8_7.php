<?php

	
	$colonne = $_POST["colonne"]
	$ligne = $_POST["ligne"];
	$player;
	$r = true;
	$game = true;
	$c = true;
	$i=0;
	$j=0;

	$tab = [$i,$j];
	$tab[0] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[1] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[2] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[3] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[4] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[5] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[6] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[7] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[8] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];
	$tab[9] = [" X "," X "," X"," X "," X "," X "," X "," X "," X "," X "];

	while ($r == true) {
		$sMessage = $ligne . "Quelle ligne ?";
		if ($i>=0 && $i<=10) {
			$r = false;
		}else {
			$sMessage = "Entre 0 et 10 : ";
		}
	}
	while($c) {
		$sMessage = $colonne . "Quelle colonne ?";
		if ($i>=0 && $i<=10) {
			$c = false;
		}else {
			$sMessage = "Entre 0 et 10 : ";
		}
	}

	while ($game == true) {
		$tab[$i][$j] = " O  ";
		$sMessage = $colonne . "\n" . $tab[0] . "\n" . $tab[1] . "\n" . $tab[2] . "\n" . $tab[3] . "\n" . $tab[4] . "\n" . $tab[5] . "\n" . $tab[6] . "\n" . $tab[7] . "\n" . $tab[8] . "\n" . $tab[9];
		$sMessage = "Tu veux jouer où ? \nTapez 0 pour jouer en haut et à gauche\nTapez 1 pour jouer en haut et à droite\nTapez 2 pour jouer en bas et à gauche\nTapez 3 pour jouer en bas et à droite";

		if ($player == 0) {
			$tab[$i][$j] = " X ";
			if ($i==0 || $j==0) {
				$game=false;
			}else {
				$tab[$i-1][$j-1] = " O ";
				$i = $i-1;
				$j = $j-1;
			}
		}else if ($player == 1) {
			$tab[$i][$j] = " X ";
			if ($i==0 || $j ==9) {
				$game=false;
			}else {
				$tab[$i-1][$j+1] = " O ";
				$i = $i-1;
				$j = $j+1;
			}
		}else if ($player == 2) {
			$tab[$i][$j] = " X ";
			if ($i==9 || $j ==0) {
				$game=false;
			}else {
				$tab[$i+1][$j-1] = " O ";
				$i = $i+1;
				$j = $j-1;
			}
		}else if ($player == 3) {
			$tab[$i][$j] = " X ";
			if ($i==9 || $j ==9) {
				$game=false;
			}else {
				$tab[$i+1][$j+1] = " O ";
				$i = $i+1;
				$j = $j+1;
			}
		}else if ($player!=1 || $player!=2 || $player!=3 || $player!=4) {
			$sMessage = "Entre 1 et 4 !";
		} 
	}
	$sMessage = "GAME OVEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEER !!!!!!!!!!!";
				
	require "exo_8_7.html";

?>