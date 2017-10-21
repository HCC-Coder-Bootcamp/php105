<?php

$year = readline('number of year?' . PHP_EOL);
$year1 = 2020;

while ($year <= $year1) {
	if ($year % 400 == 0) {
	echo $year . 'leap year' . PHP_EOL;
	} elseif ($year % 100 == 0) {
	} elseif ($year % 4 == 0) {
	echo $year . 'leap year' . PHP_EOL;
}
	$year++;
}
