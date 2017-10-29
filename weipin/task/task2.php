<?php 

	do {
		$input = readline( "Number: " . PHP_EOL );
		if ( $input != 'x') {
			$cal = $input % 2;
			$cal1 = $input % 3;
			if ( $cal == 0 || $cal1 == 0 ) {
				echo "This is prime number" . PHP_EOL;
			}
			else {
				echo "This is not prime number" . PHP_EOL;
			}	
		}
	} while ( $input != 'x' );

 ?>