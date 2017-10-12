<?php 

	$i = readline('number');
	$total = 0;

	while ( $i >= 1) {

		echo $i-- . PHP_EOL ;
		$total = $i + $total;
		echo "$total";
	}
