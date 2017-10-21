<?php

/*Show n numbers of fibonacci series , n is input. */

	$n = readline('Number :');
	$i = 0;
	$j = 1;

	
	while($i < $n) {

		$i = $i + $j;
		$j = $i - $j;
		echo $i . PHP_EOL;

	} $i ++;