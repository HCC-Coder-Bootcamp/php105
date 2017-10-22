<?php 
	$input=readline();
	$total=1;
	while ($total<=$input) {
		if ($total % 4 == 0 && $total % 100 != 0) {
			echo $total.PHP_EOL;
		}
		if ($total % 400 == 0 ) {
			echo $total.PHP_EOL;
		}
		$total++;
	}