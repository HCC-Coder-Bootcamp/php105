<?php

/*Show odd number form 0 - n. n is input */

$i = 1;
$n = readline('n' . '');

	while ($i <= $n ) {

		if ($i % 2 == 0) {
			echo $i-1;
		}
		$i ++;
	}