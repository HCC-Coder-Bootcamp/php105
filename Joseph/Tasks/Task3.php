<?php
// Show leap year from 0 to 2020.

$year = 0;
$yearEnd = 2020;

while ($year <= $yearEnd) {
	
	if ($year % 400 == 0) {
		echo $year . PHP_EOL;
	} else if ($year % 100 == 0) {

	} else if ($year % 4 == 0) {
		echo $year . PHP_EOL;
	}
	$year++;
}