<?php
// wallet app (deposit, withdraw, report)

echo system('clear');
echo 'I am a wallet application' . PHP_EOL;
$saving = 0;
$mode = readline(
		PHP_EOL . PHP_EOL .
		'Please choose your mode:' . PHP_EOL .
		'1 Deposit' . PHP_EOL .
		'2 Withdraw' . PHP_EOL .
		'3 Summary' . PHP_EOL .
		'x Exit' . PHP_EOL . PHP_EOL . 
		'Mode = '
	);
while ($mode != 'x' && $mode != 'X') {
	echo system('clear');
	if ($mode == 1) {
		$amount = readline('Please enter the amount you want to deposit:');
		$saving += $amount;
		echo 'Deposit Successful!';
	} else if ($mode == 2) {
		if ($saving != 0) {
			$amount = readline('Please enter the amount you want to withdraw:');
			if ($saving - $amount >= 0) {
				$saving -= $amount;
				echo 'Withdrawal Successful!';
			} else {
				echo 'Your wallet don\'t have so many money';
			}
		} else {
			echo 'Your wallet has no money, go and earn some money!';
		}
	} else if ($mode == 3) {
		echo "Your wallet currently has RM$saving" . PHP_EOL;
	} else {
		echo 'There is no such mode.';
	}
	$mode = readline(
		PHP_EOL . PHP_EOL .
		'Please choose your mode:' . PHP_EOL .
		'1 Deposit' . PHP_EOL .
		'2 Withdraw' . PHP_EOL .
		'3 Summary' . PHP_EOL .
		'x Exit' . PHP_EOL . PHP_EOL . 
		'Mode = '
	);
}