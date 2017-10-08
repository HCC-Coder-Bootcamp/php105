<?php 

/**
 * show odd number from 0 ~ n , n is input
 */

// $i += $i;
	
	$n = readline('');
	$i = 1;

	while ($i <= $n){
		echo "$i ";
		$i *= 2;
	}