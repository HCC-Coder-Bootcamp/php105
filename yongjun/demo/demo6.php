<?php
// find frequency of each digits of a number

echo system('clear');
echo 'I will determine the frequency of each number in from your input' . PHP_EOL;

$input = readline('input = ');

while ($input != 'x' && $input != 'X') {
	$one = 0;
	$two = 0;
	$three = 0;
	$four = 0;
	$five = 0;
	$six = 0;
	$seven = 0;
	$eight = 0;
	$nine = 0;
	$zero = 0;
	$number = $input;
	echo system('clear');
	do {
		$lastNumber = $number % 10;
		if ($lastNumber == 1) {
			$one += 1;
		} else if ($lastNumber == 2) {
			$two += 1;
		} else if ($lastNumber == 3) {
			$three += 1;
		} else if ($lastNumber == 4) {
			$four += 1;
		} else if ($lastNumber == 5) {
			$five += 1;
		} else if ($lastNumber == 6) {
			$six += 1;
		} else if ($lastNumber == 7) {
			$seven += 1;
		} else if ($lastNumber == 8) {
			$eight += 1;
		} else if ($lastNumber == 9) {
			$nine += 1;
		} else {
			$zero += 1;
		}
		$number = ($number - $number % 10) / 10;
	} while ($number);
	if ($zero != 0) echo "0 : $zero" . PHP_EOL; 
	if ($one != 0) echo "1 : $one" . PHP_EOL; 
	if ($two != 0) echo "2 : $two" . PHP_EOL; 
	if ($three != 0) echo "3 : $three" . PHP_EOL; 
	if ($four != 0) echo "4 : $four" . PHP_EOL; 
	if ($five != 0) echo "5 : $five" . PHP_EOL; 
	if ($six != 0) echo "6 : $six" . PHP_EOL; 
	if ($seven != 0) echo "7 : $seven" . PHP_EOL; 
	if ($eight != 0) echo "8 : $eight" . PHP_EOL; 
	if ($nine != 0) echo "9 : $nine" . PHP_EOL;

	echo PHP_EOL;
	$input = readline('Enter a new input, or enter x to exit.' . PHP_EOL);
}