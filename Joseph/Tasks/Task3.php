<?php
// Show leap year from 0 to 2020.

$currentYear = (int)readline('What is the current year?' . PHP_EOL);
$year = 0;

while ($year <= $currentYear) {
	
	if ($year % 400 == 0) {
		echo $year . PHP_EOL;
	} else if ($year % 100 == 0) {

	} else if ($year % 4 == 0) {
		echo $year . PHP_EOL;
	}
	$year++;
}