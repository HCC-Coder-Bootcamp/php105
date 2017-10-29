<?php 
	$input=readline();
	$total = 1;
	while ($input != 1) {
		$total*=$input;
		$input--;
		echo $total.PHP_EOL;
	}
	
	