<?php 
/**
 * accept 2 number x and y do power using loop
 *
 * e.g. input x:2, y:3
 * calculate 2 * 2 * 2
 * answer is 8
 */

	$x = readline('noX: ');
	$y = readline('noY: ');
	$i = 0;
	$ans = 1;

	while ( $i < $y ) {
		$ans = $ans * $x;
		//echo " $i ";
		$i ++;
	}
	echo "$ans" . PHP_EOL;