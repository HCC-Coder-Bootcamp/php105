<?php
// prime number of an input

echo system('clear');
echo 'I will help you to check if your input is a prime number' . PHP_EOL;

$input = readline('input = ');

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	$status = '';
	$i = 1;
	while ($i < $input - 1) {
		$i ++;
		if ($input % $i == 0) {
			$status = ' not';
		}
	}
	echo "$input is$status a prime number";
	echo PHP_EOL;
	$input = readline('Enter a new input, or enter x to exit.' . PHP_EOL);
}