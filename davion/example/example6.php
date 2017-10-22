<?php 

//6 find power of umbers, x ^ y, using loop

$input_x= readline('input number?' . PHP_EOL);
$input_y= 20;

while ($input_x <= 20 && $input_x >= 0 && $input_y >= 0) {
	if ($input_y != $input_x) {
		$total = pow(($input_x), $input_y);
		echo $total . PHP_EOL;
	} elseif ($input_x != $input_x){
		echo 'haha' . PHP_EOL;
	}

	$input_y--;
}
