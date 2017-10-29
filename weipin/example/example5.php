<?php 

	$input = readline( "Input number:" . PHP_EOL ) ;

	$num0 = 0 ;
	$num1 = 0 ;
	$num2 = 0 ;
	$num3 = 0 ;
	$num4 = 0 ;
	$num5 = 0 ;
	$num6 = 0 ;
	$num7 = 0 ;
	$num8 = 0 ;
	$num9 = 0 ;

	while ( $input > 0 ) {

		$count = $input % 10 ;
		$count1 = $input / 10 ;

		if ( $count == 0 ) {
			$num0 = $num0 + 1 ;
			echo "Num0: " . $num0;
		}
		else if ( $count == 1 ) {
			$num1 = $num1 + 1 ;
			echo "Num1: " . $num1;
		}
		else if ( $count == 2 ) {
			$num2 = $num2 + 1 ;
			echo "Num2: " . $num2;
		}
		else if ( $count == 3 ) {
			$num3 = $num3 + 1 ;
			echo "Num3: " . $num3;
		}
		else if ( $count == 4 ) {
			$num4 = $num4 + 1 ;
			echo "Num4: " . $num4;
		}
		else if ( $count == 5 ) {
			$num5 = $num5 + 1 ;
			echo "Num5: " . $num5;
		}
		else if ( $count == 6 ) {
			$num6 = $num6 + 1 ;
			echo "Num6: " . $num6;
		}
		else if ( $count == 7 ) {
			$num7 = $num7 + 1 ;
			echo "Num7: " . num7;
		}
		else if ( $count == 8 ) {
			$num8 = $num8 + 1 ;
			echo "Num8: " . $num8;
		}
		else if ( $count == 9 ) {
			$num9 = $num9 + 1 ;
			echo "Num9: " . $num9;
		}
	}

	echo "Number0: " . $num0 . PHP_EOL . "Number1: " . $num1 . PHP_EOL . "Number2: " . $num2 . PHP_EOL . "Number3: " . $num3 . PHP_EOL . "Number4: " . $num4 . PHP_EOL .  "Number5: " . $num5 . PHP_EOL .  "Number6: " . $num6 . PHP_EOL .  "Number7: " . $num7 . PHP_EOL . "Number8: " . $num8 . PHP_EOL .  "Number9: " . $num9 . PHP_EOL ;

 ?>