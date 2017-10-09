<?php
// Show odd number from 0 to n, n is input number.

$input  = readline('');
$number = 1;

while ($number <= $input) {
	if ($number % 2 == 1) {
		echo $number . PHP_EOL;
	}
	$number++;
}