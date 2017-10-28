<?php
// Show even number form 0 to n. n is input number.

$n = readline('');
$number = 1;

while ($number <= $n) {
	if ($number % 2 == 0) {
		echo $number . PHP_EOL;
	}
	$number++;
}

// while ($number <= ($n/2)) {
// 	echo 2 * $number;
// }