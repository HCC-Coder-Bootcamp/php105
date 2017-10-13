<?php
// Show leap year from 0 to 2020

echo system('clear');
$year = 0;
$display = 0;
while ($year <= 2020) {
	if ($year % 100 != 0 || $year % 400 == 0) {
		$displayYear = $year; 
		$displayYear = $year < 1000 ? '0' . $year : $displayYear; 
		$displayYear = $year < 100 ? '00' . $year : $displayYear; 
		$displayYear = $year < 10 ? '000' . $year : $displayYear; 
		echo $displayYear . ' ';
		$display++;
		if ($display % 30 == 0) echo PHP_EOL;
	}
	$year += 4;
}
echo PHP_EOL;