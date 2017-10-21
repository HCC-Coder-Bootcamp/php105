<?php

/*Accept 2 number X,Y. do power using loop. */

	$x = readline('Number :');
	$y = readline('Power of :');

	$i = $x;
	$j = 1;

	while($j < $y) {

		$i *= $x;
		$j++;
	}
	echo $i . PHP_EOL;