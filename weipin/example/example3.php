<?php 

	$i = 1;
	
	do {

		$cal = $i % 2;

		if ( $cal == 0 ) {

			echo "EVEN " . $i . PHP_EOL;
		
		}

			$i++;

	} while ( $i < 11 );

	$i = 1;

	do {

		$cal = $i % 2;

		if ( $cal != 0 ) {

			echo "ODD " . $i . PHP_EOL;
		
		}

			$i++;

	} while ( $i < 11 );

 ?>