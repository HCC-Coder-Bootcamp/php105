<?php

/*Demo3 : Show enven number form 0 to n; n is input number; 

input 15 echo 2,4,6,8,10,12,14*/

	$n = (int)readline('Number');
	$i = 1;

	while ($i <= $n ) {
		if ($i % 2 == 0) {

			echo $i;
		}

		$i ++;

	}

/*
while ($i < $n/2) {

	echo 2 * $i ++;
}

*/
