<?php

/*Show all factors of a input. */

 $n = readline('Number : ');
 $i = 1;

 while($i <= $n) {

 	if ($n % $i == 0){
 		echo $i . PHP_EOL . '';
 	} $i++;
 } 