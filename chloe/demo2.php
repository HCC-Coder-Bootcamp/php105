<?php 

/**
 * show even number from 0 ~ n , n is input
 */


	$n = (int)readline('show even number until? : ');

	$i = 1;
	while ( $i <= $n ) {
		if ( $i % 2 == 0 ) {
			echo "$i, ";
		}
		$i ++;
	}

	// while ($i <= $n / 2){
	// 	echo 2 * $i ++;
	// }


