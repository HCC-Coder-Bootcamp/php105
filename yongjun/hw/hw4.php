<?php
// reverse 5 number

echo system('clear');
echo 'I will reverse the number you input' . PHP_EOL;
$input = readline('input = ');

while ($input != 'x' && $input != 'X') {
	$forward = $input;
	$reverse = 0;
	echo system('clear');
	do {
		$reverse = ($reverse + $input % 10) * 10;
		$input = ($input - $input % 10) / 10;
	} while ($input);
	$reverse /= 10;
	echo "The reverse number of $forward, is $reverse" . PHP_EOL;
	$input = readline("Try another input, or enter x to exit" . PHP_EOL);
}