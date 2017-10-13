<?php
// Sum all input, x exit

echo system('clear');
$input = readline('Please enter a number : ');
$sum = 0;

while ($input != 'x' && $input != 'X') {
	$sum += (int)$input;
	echo system('clear');
	$input = readline("The sum of all inputs is $sum, enter a number to continue adding, enter x to exit" . PHP_EOL);
}