<?php

/**
 * show all factors of an input number
 * e.g. input 12
 * output 1, 2, 3, 4, 6
 */

	$input =readline('number: ');
	$i = 1;

	while ( $i <= $input ) {
		//echo "$i" . PHP_EOL;
		//echo $input % $i;
		//echo PHP_EOL;
		if (($input % $i) == 0) {
			echo "$i" . PHP_EOL;
		}
		$i++;
	}