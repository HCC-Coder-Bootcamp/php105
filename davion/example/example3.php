<?php 

$i = 1;

while ($i <= 10) {
	if ($i % 2 == 0){
		echo $i . 'even number' .PHP_EOL;
	} elseif ($i % 2 != 0) {
		echo $i . 'odd  number' .PHP_EOL;
	}
	$i++;
}
