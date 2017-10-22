<?php 
	echo "._________________________________.".PHP_EOL;
	echo "|_____|__WALLET__|___|___|___|____|".PHP_EOL;
	echo "|_|___|___|___|___TRACKING__|__|__|".PHP_EOL;
	echo "|-------Balance-----Click---'A'---|".PHP_EOL;
	echo "|-------Deposit-----Click---'B'---|".PHP_EOL;
	echo "|-------Withdraw----Click---'C'---|".PHP_EOL;
	echo "|-------Exit--------Click---'X'---|".PHP_EOL;
	echo "|_________________________________|".PHP_EOL;

	$input = 0;

	$amount = 0;

	do {

		$input = readline('');

		if ($input == 'A') {

			echo ".Your.Balance.is.RM $amount...BEEP".PHP_EOL;
			
		}else if ($input == 'B') {

			$deposit = readline(".Insert.your.deposit.please.BEEP...RM ");

			$amount = $deposit + $amount;

			echo ".Your.Deposit.is.RM $deposit...BEEP".PHP_EOL;

			echo ".Your.Amount.is.RM $amount...BEEP".PHP_EOL;
			
		}else if ($input == 'C') {

			$withDraw = readline("..Insert.your.withdraw.please.BEEP...RM ");

			if ($amount < $withDraw) {

				echo "...Not.enough.money...BEEP".PHP_EOL;

			}else if($amount > $withDraw){

				$amount = $amount - $withDraw;

				echo "..Your.Withdraw.is..RM $withDraw..BEEP".PHP_EOL;

				echo ".Remain.amount.BEEP..RM $amount...BEEP".PHP_EOL;

			}
			
		}else{
			echo "...BEEP.BEEP...".PHP_EOL;
		}
		
	} while ($input != 'X');