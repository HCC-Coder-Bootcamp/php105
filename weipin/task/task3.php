<?php 

	$now = date("Y");
	$year = 0;

	while ( $year < $now ) {
		$count4 = $year % 4;
		$count400 = $year % 400;
		if ( $count4 == 0 || $count400 == 0 ) {
			echo "Leap Year: " . $year . PHP_EOL;
		}
		$year++;
	}

 ?>