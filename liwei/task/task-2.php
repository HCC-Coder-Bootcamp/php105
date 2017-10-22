<?php 
	$input= readline();
	$total = 2;
	$prime = 4;
	$status = "a";
	while ($total < $prime) {

		$prime--;

		if ($input == $prime) {
			$status = "a";
			
		}else if ($input % $prime == 0 || $input == 1) {
			$status = "not a";
		}
	}
	echo "$input is $status prime number";