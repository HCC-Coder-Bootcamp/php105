<?php

/*Wallet app,deposit,withdraw,show balance. */
	
	echo "Welcome to wallet app, 
	please choose the function to start : " . PHP_EOL;

	$withdraw = 0;
	$deposit = 0;
	$balance = 0;

	$function = readline(
	'Press 1 to Withdraw ' . PHP_EOL .
	'Press 2 to Deposit ' . PHP_EOL . 
	'Press 3 to Check balance ' . PHP_EOL . 
	'Press X to Exit ' . PHP_EOL);

while ($function != 'x' || $function != 'X') {

	if($function == 1) {
		$withdraw = readline('Enter withdraw amount :');

		if($withdraw <= $balance) {
			$balance = $balance - $withdraw;
			echo "You have withdraw RM $withdraw from wallet." . PHP_EOL;
		}else {
			echo "You wallet not enought money." . PHP_EOL;
		}

	}else if($function == 2) {
		$deposit = readline('Enter deposit amount:');
		
		$balance = $balance + $deposit ; 
		echo "You have successful deposit RM $deposit into wallet!" . PHP_EOL;
	
	}else if($function == 3) {
		$balanceMsg = "You current balance amount is RM $balance .";

	}else {
		echo "Wrong input, please enter again. " . PHP_EOL;
	}

	$balanceMsg = "You current balance amount is RM $balance .";
	echo "$balanceMsg" . PHP_EOL;

	$function = readline(
	'Press 1 to Withdraw ' . PHP_EOL .
	'Press 2 to Deposit ' . PHP_EOL . 
	'Press 3 to Check balance ' . PHP_EOL . 
	'Press X to Exit wallet app ' . PHP_EOL);
	}	