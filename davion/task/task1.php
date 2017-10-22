<?php

$number = readline('number?' . PHP_EOL);
$i = 1;

while ($number > 0) {
	$i = $number * $i;
	echo $number-- . PHP_EOL;

}

echo 'total ' . $i . PHP_EOL;
