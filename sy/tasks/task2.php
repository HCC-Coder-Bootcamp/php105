<?php

/*Input n ,calculate factorial of n; */
	
	$n = readline('Number :');
	$i = 1;

	while ($n > 0) {
		$i =  $n * $i;
		$n --;

	} echo $i;