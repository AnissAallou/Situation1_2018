<?php
    $tab = [0, 1, 2, 3, 4, 5, 6];


            $i =0;
            $j = count($tab) - 1;
            $temp;
            $n = 6;
			



	for($i=0; $i<=5; $i++) {
		$min=$i;

		for($j=$i+1; $j<=6; $j++) {
			if($tab[$j]<$tab[$min]) {
					$min=$j;
			}
		}
		$temp=$tab[$min];
		$tab[$min]=$tab[$i];
		$tab[$i]=$temp;
	
	}

           $sMessage = implode(',',$tab);
        

     require "exo_6_17.html";
	 


	

?>