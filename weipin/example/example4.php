<?php 

	$i = 0;

	do {

		echo "Answer: " . $i . PHP_EOL;

		$add = (int)readline( "ADD" . PHP_EOL );

		$i = $i + $add;

	} while ( $add != 'x' );

 ?>