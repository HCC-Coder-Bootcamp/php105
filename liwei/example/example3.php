<?php 

	$input = 10;
	$total = 1;

	while ($total<=$input) {

		if ($total % 2 == 0) {

			echo "$total is EVEN number".PHP_EOL;

		}else{

		echo "$total is ODD number".PHP_EOL;

		}
		$total++;

	}