<?php 
	$input=readline();
	$total = 1;
	while ($input != 0) {
		$output = $input % 10;
		$input = ($input - $output) / 10;
		echo $output;
	}
	
	
	