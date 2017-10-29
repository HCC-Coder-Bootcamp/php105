<?php
	$input = readline();
	$total = 1;
	while ($total <= $input) {
		if ($input % $total == 0) {
			echo " $total".PHP_EOL;
			$totalNagetive = $total - $total - $total;
			echo $totalNagetive.PHP_EOL;
		}
		$total++;
	}
	
	