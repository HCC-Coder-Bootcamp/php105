<?php

// 5 create a wallet tracking app, able to deposit, withdraw, show balance and exit

$amount = readline('give me ur wallet amount?' . PHP_EOL);

while ($amount != 0){

	echo 'option 1 = withdraw' . PHP_EOL;
	echo 'option 2 = show balance' . PHP_EOL;
	echo 'option 3 = deposit' . PHP_EOL;
	echo 'option 4 = exit' . PHP_EOL;

	$option = readline('give me option?' . PHP_EOL);

	if($option == 1){

		$withdraw = readline('give me u want withdraw amount?' . PHP_EOL);

		$amount = $amount - $withdraw;

		echo $amount . PHP_EOL;

	} elseif ($option == 2) {
		
		echo 'your current amount is ' . $deposit . PHP_EOL;

	} elseif ($option == 3) {

		$deposit = readline('give me u want saving amount?' . PHP_EOL);

		$deposit = $deposit - $withdraw;

		echo $deposit . PHP_EOL;
		

	}elseif ($option == 4) {

		$exit = exit;
	}
}