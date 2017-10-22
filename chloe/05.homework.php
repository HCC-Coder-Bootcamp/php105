<?php 
/**
 * create an wallet app, able to deposit, withraw and show balance
 */
		
	
	$balance = 0;

	do {
		$input = readline('May i help you?' . PHP_EOL);
		if ($input == 'b') {
			echo "$balance" . PHP_EOL;
		}elseif ($input == 'd') {
			$deposit = readline('How much you want to deposit?' . PHP_EOL);
			$balance = $balance + $deposit;
		}elseif ($input == 'w') {
			$withraw = readline('How much you want to withraw?' . PHP_EOL);
			$balance = $balance - $withraw;
		}
	} while ( $input !== 'x');
		echo "Thnak you" . PHP_EOL;