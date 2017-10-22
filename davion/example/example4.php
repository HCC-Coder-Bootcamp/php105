<?php

//4 create a loop to input number, sum all numbers. input 'x' to exit

$number = readline('number?' . PHP_EOL);
$i = 1;

while ($number > 0) {
	$i = ($number + $i);
	echo $number-- . PHP_EOL;

}

echo 'total ' . $i . PHP_EOL;
$exit = readline('exit?' . PHP_EOL . 'select x' . PHP_EOL);

