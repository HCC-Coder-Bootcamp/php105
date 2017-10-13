<?php
// average all input, x as exit

echo system('clear');
$input = readline('Please enter a number : ');
$n = 0;
$sum = 0;

while ($input != 'x' && $input != 'X') {
	$sum += (int)$input;
	$n++;
	$average = $sum / $n;
	echo system('clear');
	$input = readline("The average of all inputs is $average, enter a number to continue to get average, enter x to exit" . PHP_EOL);
}