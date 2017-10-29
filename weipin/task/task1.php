<?php 

	$input = readline( "Factorial: " );
	$ans = 1;

	while ( $input > 0 ) {
		$ans = $ans * $input;
		$input--;
	}
		echo "Answer: " . $ans . PHP_EOL;

 ?>