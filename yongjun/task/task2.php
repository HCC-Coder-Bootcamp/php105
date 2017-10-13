<?php
// n factorial, n!

echo system('clear');
echo 'I will find the factorial value of your input, n' . PHP_EOL;

$input = readline('n = ');
$answer = 1;

while ($input != 'x' && $input != 'X') {
	$value = (int)$input;
	echo system('clear');
	if ($value > 0) {
		while ($value > 1) {
			$answer *= $value--;
		}
	} else {
		$answer = 1;
	}
	echo "The factorial of $input is $answer" . PHP_EOL;
	$answer = 1;
	$input = readline('Enter a new n value, or enter x to exit.' . PHP_EOL);
}