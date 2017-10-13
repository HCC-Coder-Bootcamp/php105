<?php
// show even number from 0 to n

echo system('clear');
echo 'I will show you even number from 0 to n' . PHP_EOL;

$input = readline('n = ');
$value = 2;

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	while ($value <= $input) {
		echo $value . ' ';
		$value += 2;
	}
	$value = 2;
	echo PHP_EOL;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}