<?php
// all factor of an input

echo system('clear');
echo 'I will list the factor(s) of your input, n' . PHP_EOL;

$input = readline('n = ');

while ($input != 'x' && $input != 'X') {
	echo system('clear');
	echo "The factor(s) of $input is ";
	$i = 1;
	while ($i <= $input) {
		if($input % $i == 0) echo $i . ' ';
		$i++;
	}
	echo PHP_EOL;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}