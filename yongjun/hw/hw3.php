<?php
// n number of fibonacci series

echo system('clear');
echo 'I will list down the fibonacci number before n' . PHP_EOL;
$input = readline('n = ');

while ($input != 'x' && $input != 'X') {
	$a = 0;
	$b = 0;
	$now = 1;
	echo system('clear');
	while ($now <= $input) {
		echo $now . ' ';
		$a = $b;
		$b = $now;
		$now = $a + $b;
	}

	echo PHP_EOL;
	$input = readline("Try another n, or enter x to exit" . PHP_EOL);
}