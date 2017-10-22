<?php

/**
 * input number, reverse digits
 * e.g. input 132
 * output 231
 */

	$input = readline('Number: ');
	$ans = 0;

	do {
		// $input_1 = $input % 10;
		// $input_2 = $input - $input_1;
		// $input = $input_2 / 10;
		$ans = ($ans * 10) + ($input % 10);
		$input = ($input-($input % 10)) / 10;
		


	} while ($input > 0);

	echo "$ans" . PHP_EOL;