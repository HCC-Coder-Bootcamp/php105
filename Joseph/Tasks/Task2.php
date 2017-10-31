<?php
// Input n , Calculate factorial of n;

$num  = readline('Please enter a number, and I will factorial it for U.' . PHP_EOL . PHP_EOL);
$fact = 1;

if ($num > 0) {
 	for ($i = 1; $i <= $num; $i++) { 
		$fact = $fact * $i;
	}
	echo "The factorial of $num is: $fact" . PHP_EOL;
} else {
	echo "The number is out of range!!" . PHP_EOL;
}