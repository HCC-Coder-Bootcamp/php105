<?php

/*Demo5 : Do a loop show power of 2 until n , n is input; */

	$n = readline('n');
	$i = 1 ;

	while ($i <= $n) {

		echo $i . PHP_EOL . '';
		$i *= 2;
	}
