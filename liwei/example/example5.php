<?php 

	$number = readline();

	$total = 1;
	$output_0 = 0;
	$output_1 = 0;
	$output_2 = 0;
	$output_3 = 0;
	$output_4 = 0;
	$output_5 = 0;
	$output_6 = 0;
	$output_7 = 0;
	$output_8 = 0;
	$output_9 = 0;

	while ($number != 0) {

	$input = $number % 10;

	if ($input == 0 ) {

		$output_0++;

	}else if ($input == 1 ) {

		$output_1++;

	}else if ($input == 2 ) {

		$output_2++;

	}else if ($input == 3 ) {

		$output_3++;

	}else if ($input == 4 ) {

		$output_4++;

	}else if ($input == 5 ) {

		$output_5++;

	}else if ($input == 6 ) {

		$output_6++;

	}else if ($input == 7 ) {

		$output_7++;

	}else if ($input == 8 ) {

		$output_8++;

	}else if ($input == 9 ) {

		$output_9++;

	}

	$number = ($number - $input) / 10;

}
echo 
"Number 0 = $output_0
Number 1 = $output_1
Number 2 = $output_2
Number 3 = $output_3
Number 4 = $output_4
Number 5 = $output_5
Number 6 = $output_6
Number 7 = $output_7
Number 8 = $output_8
Number 9 = $output_9" .PHP_EOL;