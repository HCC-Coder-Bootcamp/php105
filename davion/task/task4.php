<?php

//4 accept a number and print reverse eg input : 113452 output : 254311

$digits = readline('Gimme your number ?' . PHP_EOL);
$haha = 1;

while($digits != 0 && $haha <=1){

		$tenthousand = ((($digits%10-$digits%1)/1)*1);
		$thousand = ((($digits%100-$digits%10)/10)*1);
		$hundred = ((($digits%1000-$digits%100)/100)*1);
		$ten = ((($digits%10000-$digits%1000)/1000)*1);
		$one = ((($digits%100000-$digits%10000)/10000)*1);

		echo $tenthousand . $thousand . $hundred . $ten . $one . PHP_EOL;
		echo $one . $tenthousand . $thousand . $hundred . $ten . PHP_EOL;
		echo $ten . $one . $tenthousand . $thousand . $hundred . PHP_EOL;
		echo $hundred . $ten . $one . $tenthousand . $thousand . PHP_EOL;
		echo $thousand . $hundred . $ten . $one . $tenthousand . PHP_EOL;

	if($digits != 0 && $haha <=30){

	}

$haha ++;

}

?>