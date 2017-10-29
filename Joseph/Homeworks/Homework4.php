<?php
// input number, reverse digits.

$input = readline('Enter five digits number: ' . PHP_EOL);

do {
	$input %= 10;
	$input *= 10;
} while ($input <= 10);