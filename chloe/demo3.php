<?php 

/**
 * do a loop show power of 2 until n , n is input
 */

	$n = readline('input a number: ');
	$i = 1;

	while ($i <= $n){
		echo "$i, ";
		$i *= 2;
		// $i += $i;
	}

