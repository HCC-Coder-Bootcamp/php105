<?php

//3 print fibonacci numbers from 0 to an input number eg 112358 13 21


$digit = readline('number?' . PHP_EOL);

while ($digit <= 100000000) {

	$one = 0;
	$second = 0;
	$third = 1;

	while ($third <= $digit){

		$one = $second;
		$second = $third;
		$third = $one + $second;
	}

echo $third . PHP_EOL;
$digit = $third;
$digit += 1;

}