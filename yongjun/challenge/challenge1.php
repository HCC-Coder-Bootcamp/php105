<?php
// HCF, LCM

echo system('clear');
echo 'HCF LCM Calculator' . PHP_EOL;
$saving = 0;
$mode = readline(
		PHP_EOL . PHP_EOL .
		'Please choose your mode:' . PHP_EOL .
		'1 HCF' . PHP_EOL .
		'2 LCM' . PHP_EOL .
		'x Exit' . PHP_EOL . PHP_EOL . 
		'Mode = '
	);
while ($mode != 'x' && $mode != 'X') {
	echo system('clear');
	if ($mode == 1 || $mode == 2) {
		$input1 = readline('Please enter a number:');
		$input2 = readline('Please enter another number:');
		if ($mode == 1) {
			$i = 1;
			while ($i <= $input1) {
				$j = 1;
				if ($input1 % $i == 0) {
					while ($j <= $input2) {
						if ($input2 % $j == 0) {
							if($i == $j) $HCF = $i;
						}
						$j++;
					}
				}
				$i++;
			}
			echo "The HCF of $input1 and $input2 is $HCF";
		} else {
			$LCM = $input1 * $input2;
			$i = $input2;
			while ($i > 1) {
				$LHS = $input1 * --$i;
				$j = $input1;
				while ($j > 1) {
					$RHS = $input2 * --$j;
					if($LHS == $RHS)$LCM = $LHS;
				}
			}
			echo "The LCM of $input1 and $input2 is $LCM";
		}
	}
	else {
		echo 'There is no such mode.';
	}
	$mode = readline(
		PHP_EOL . PHP_EOL .
		'Please choose your mode:' . PHP_EOL .
		'1 HCF' . PHP_EOL .
		'2 LCM' . PHP_EOL .
		'x Exit' . PHP_EOL . PHP_EOL . 
		'Mode = '
	);
}