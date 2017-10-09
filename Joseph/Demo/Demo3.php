<?php
// Show even number form 0 to n. n is input number.

$input  = readline('');
$number = 1;

while ($number <= $input) {
	if ($number % 2 == 0) {
		echo $number . PHP_EOL;
	}
	$number++;
}

//while ($number <= $input/2) {
	//echo 2 * $number;
//}