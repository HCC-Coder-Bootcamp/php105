<?php

/*Show leap year form 0 to 2020. */

	$i = 0;
	$yrs = 2020;

while ($i <= $yrs ) {
		if ($i % 4 == 0) {

			if ($i % 100 != 0 || $i % 400 == 0) {

				echo $i . PHP_EOL . '';
			}
		}

		$i ++;

	}