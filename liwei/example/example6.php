<?php
	$input1 = readline();
	$input2 = readline();
	$total=2;
	$ans = $input1 * $input1;
	while ($total < $input2) {	
		$ans *= $input1;
		$input2--;
	}
	echo $ans .PHP_EOL;
	   