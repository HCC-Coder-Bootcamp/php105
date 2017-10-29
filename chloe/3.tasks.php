<?php

/**
 * show leap year from 0 to 2020
 * e.g. 4, 8, 12, 16, 20...
 */



	$year = 1;

	while ( $year <= 2020) {
		// echo "in year of : $year" . PHP_EOL;

		if (($year % 400) == 0){

			$answer = 'LEAP YEAR';
			echo "$year" . PHP_EOL;


		}else if (($year % 100 )== 0){

			$answer = 'NORMAL';

		}else if (($year % 4) == 0){

			$answer = 'LEAP YEAR';
			echo "$year" . PHP_EOL;

		}else{

			$answer = 'NORMAL';

		}

		//echo $answer;
		$year++;

	}
