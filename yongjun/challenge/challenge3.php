<?php
// check if input is Palindrome number (mirror)

echo system('clear');
echo 'I will check if your input is Palindrome number' . PHP_EOL;
$input = readline('input = ');

while ($input != 'x' && $input != 'X') {
	$forward = $input;
	$reverse = 0;
	echo system('clear');
	do {
		$reverse = ($reverse + $input % 10) * 10;
		$input = ($input - $input % 10) / 10;
	} while ($input);
	$reverse /= 10;
	$isPalindrome = ' not';
	if ($reverse == $forward) $isPalindrome = '';
	echo "$forward, is$isPalindrome a Palindrome number" . PHP_EOL;
	$input = readline("Try another input, or enter x to exit" . PHP_EOL);
}