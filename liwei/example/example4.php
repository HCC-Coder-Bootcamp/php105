<?php  
	$numberInput=0;
	$total=0;
	do {
		$numberInput = readline("");
		$total = $total + $numberInput;
		echo $total .PHP_EOL;
		
	} while ($numberInput != "x");