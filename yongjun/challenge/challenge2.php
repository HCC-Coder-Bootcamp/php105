<?php
// Multiplication Table

echo system('clear');
echo 'I will construct a multiplication table for you' . PHP_EOL;

$base = readline('I want a multiplication table of :');

while ($base != 'x' && $base != 'X') {
	$row = readline('I want it shows till multiple of : ');
	echo system('clear');
	echo "Multiplication table for $base with $row rows" . PHP_EOL;
	$i = 1;
	while ($i <= $row) {
		$ans = $i * $base;
		echo "$base  X  $i\t=  $ans" . PHP_EOL;
		$i++;
	}
	$base = readline('Try another number for multiplication table, or x to exit' . PHP_EOL . 'I want a multiplication table of (or x) = ');
}