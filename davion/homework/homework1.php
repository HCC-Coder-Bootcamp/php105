<?php

$number = readline('number?' . PHP_EOL);
$i = 1;

while (	$i < $number) {
	if ($number % $i == 0) {
		echo $i . 'factor' . PHP_EOL;
	} elseif ($number % $i != 0) {
	}
	$i++;
}