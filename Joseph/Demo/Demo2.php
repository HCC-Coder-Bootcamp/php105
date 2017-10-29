<?php
// Sum all input number until 'x';
$total = 0;
$input = 0;

do {
	$total += (int)$input;
	echo $total . PHP_EOL;
	$input = readline('');
} while ($input != 'x');