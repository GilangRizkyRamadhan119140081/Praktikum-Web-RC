<?php

function prima($angka){
	echo "PROGRAM MENGURUTKAN BILANGAN PRIMA <br>";

	
	for($i=1;$i<=$angka;$i++){ 
			$a = 0; 
			for($j=1;$j<=$i;$j++){ 
				if($i % $j == 0){ 
					$a++; 
				}
			}
			if($a == 2){ 
			 echo $i." <br>" ;
		  	}
	}




}

$bilangan = 50;
prima($bilangan); 



?>