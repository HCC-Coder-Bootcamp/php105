<?php

/**
 * input n , calculate factorial of n;
 * e.g. input 5
 * calculate 5 * 4 * 3 * 2 * 1;
 * answer 120
 */
?>

<?php 

	$input = readline('input : ' . PHP_EOL);
	$total = 1;

	while( $input > 0 ) {
		$total = $input * $total;
		echo $input--;
		echo ' ';
	}
	echo PHP_EOL . "total : $total";
//	do {

//		$total = (int)$input * (int)$input;
//		$list = ($total * $total) + $input;
//		echo "Answer : $total" . PHP_EOL;

//	}while ( $input >= 0 );
//		echo $input ++ ;


//$i = readline('number');
	//$total = 0;

	//while ( $i >= 1) {

		//echo $i-- . PHP_EOL ;
		//$total = $i + $total;
		//echo "$total";
	//}