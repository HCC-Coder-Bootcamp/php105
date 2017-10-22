<?php
	$total = 0;
	$runtime = 0;

	do {
		$input = readline();
		
		$runtime++;
		
		if ($input != 'x') {
			
			$total = ($total + $input) / $runtime ;
			
			echo "$total Exit click 'x'" .PHP_EOL;
			
		}else{
			
			echo "Thank you";
			
		}
		
	}while ($input != 'x');