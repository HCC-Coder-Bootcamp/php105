<?php 

	//1.$i = 0;

	//while ( $i <= 10) {
		//}

	//do {
		//echo $i ++
			//} while ( <= 10);


	//2.$total = 0;
	//$input = 0;

	//do {
	//	$total = $total + (int)$input;
	//	echo "$total";
	//	$input = readline('');
	//} while ( $input != 'x' );


	$n = (int)readline('');
	$i = 1;
	while ( $i <= $n ){
		if ( $i % 2 == 0 ){
			echo "$i";
		}
		$i ++;
	}