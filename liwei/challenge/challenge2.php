<?php
	echo "Multiplication Table" .PHP_EOL;
	$mult = readline("Multiplication Number - ");
	$times = readline("Multiplication Times  - ");
	$total = 1;
	$mulTime = 0; 
	while ($total <= $times) {
		$ans = $mult * $total;
		$total++;
		$mulTime++;
		echo "$mult x $mulTime = $ans" .PHP_EOL;
	}
	
	