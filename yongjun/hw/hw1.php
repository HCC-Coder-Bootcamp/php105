<?php
// power function, pow(a,n)

echo system('clear');
echo 'I will help you to calculate the nth power of your input number.' . PHP_EOL;

$base = readline('input number = ');

while ($base != 'x' && $base != 'X') {
	$ans = 1;
	$m = 1;
	$n = readline('n = ');
	echo system('clear');
	while ($m <= $n) {
		$ans *= $base;
		$m++; 
	}
	echo "The $n th power of $base is $ans" . PHP_EOL;
	$base = readline('Try a new input number, or x to exit' . PHP_EOL . 'input number (or x) = ');
}