<?php
// power of 2 until n

echo system('clear');
echo 'I will list the power of 2 until n' . PHP_EOL;

$input = readline('n = ');
$value = 1;

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	while ($value <= $input) {
		echo $value . ' ';
		$value *= 2;
	}
	$value = 1;
	echo PHP_EOL;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}