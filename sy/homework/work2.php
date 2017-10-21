<?php

/* Accept input, calculate average of all number.'X' exit. */

	$total = 0;
	$input = 0;

	do {

		$total = $total + (int)$input;
		$avg = $total /2;
		echo $avg;
		$input = readline('input number');
	}while ($input != 'x');