<?php
// Do a loop show power of 2 until n, n is input number.

$n = readline('');
$i = 1;

while ($i <= $n) {
	echo $i . PHP_EOL;
	$i *= 2;
}