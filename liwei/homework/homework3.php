<?php 
	$input=readline();
	$total = 0;
	$fibo = 1;
	while ($total + $fibo < $input) {
		$fibo = $total + $fibo;
		$total = $total + $fibo;
		echo $fibo .PHP_EOL;
		echo $total .PHP_EOL;
	}
	
	
	