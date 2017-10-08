<?php 

/**
 * accept input in a loop, sum all numbers, input 'x' to exit
 */


	//1.$i = 0;

	//while ( $i <= 10) {
		//}

	//do {
		//echo $i ++
			//} while ( <= 10);



	$total = 0;
	$input = 0;

	do {

		$total = $total + (int)$input;
		echo "total is : $total" . PHP_EOL;
		$input = readline('input a number to add it up : ');

	} while ( $input != 'x' );