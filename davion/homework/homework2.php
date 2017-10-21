<?php

//2 create a loop to input number, calculate average of all numbers. input 'x' to exit

$number1 = readline('number?' . PHP_EOL);
$i = 1;
$number = $number1;

while ($number > 0) {
	$i = ($number + $i);
	echo $number-- . PHP_EOL;

}

echo 'total ' . $i . PHP_EOL;


$number2 = $i/$number1;
echo 'average ' . (int)$number2 . PHP_EOL;

$exit = 'X';
$exit = readline('Exit? ' . 'Select X' . PHP_EOL);

if ($exit != 'X') {
	echo 'hi';
} elseif ($exit == 'X') {
	echo 'successfully back';
}

