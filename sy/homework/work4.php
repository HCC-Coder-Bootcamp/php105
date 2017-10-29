<?php

/*Input number ,reverse digits. */

	$n = readline('Input Number :');
	$input = $n;
	$reverse = 0;
	$sparate = 0;

	do {
		$sparate = $sparate + ($input % 10) * 10;
		$input = ($input - ($input % 10)) / 10;
		
		echo $sparate /= 10;
	}while($input > 0);

/*
reverse = sparate + (sparate * 10)
sparate = input % 10
input = input / 10
*/