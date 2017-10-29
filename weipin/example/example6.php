<?php 

	$inputX = readline( "Input number:" . PHP_EOL );

	$inputY = readline( "Input power: " . PHP_EOL );

	$frequency = 0;

	$cal = 1 ;

	do {

		$cal = $cal * $inputX;

		$frequency++;

	} while ( $frequency < $inputY );

		echo "Answer: " . $cal . PHP_EOL;

 ?>