<?php

/* Demo2 : Sum all input number , until x; */

	$total = 0;
	$input = 0;

	do {

		$total = $total + (int)$input;
		echo $total;
		$input = readline('input number');
	}while ($input != 'x');