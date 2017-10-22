<?php

/**
 * accept input in a loop, calculate average of all numbers, input 'x' to exit
 */


 //

	$input = 0;
	$i = 1;
	$ans = 0;
	$sum = 0;

	while ( $input !== 'x' ) {
		$input = readline('no: ');
		$sum = $input + $sum;
		$ans = $sum / $i;
		echo "average = $ans" . PHP_EOL;
		//echo "$sum" . PHP_EOL;
		//echo "$i" . PHP_EOL;
		$i++;
	}
