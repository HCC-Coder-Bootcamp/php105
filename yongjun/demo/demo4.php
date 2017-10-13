<?php
// 1st digit of an input

echo system('clear');
echo 'I will give the first digit of your input' . PHP_EOL;

$input = readline('Please enter your input number: ');

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	while (($input - $input % 10)) {
		$input = ($input - $input % 10) / 10;
	}
	echo "The first digit of your input is $input" . PHP_EOL;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}