<?php
//HCF LCM
echo "HCF Click 'A' ";
echo "LCM Click 'B' "; 
$input = readline('');
$numb1 = readline('Number 1 ');
$numb2 = readline('Number 2 ');
$total1 = 1;
$total2 = 1;

	do {
		if ($input == 'A') {
			if ($numb1 % $total1 == 0) {
				
				echo $total1;
			  }
			
			$total1++;
			
		}else if ($input == 'B') {
			$ansB = $numb1 * $numb2;
			echo "LCM number is $ansB";
			echo "HCF & LCM & EXIT-X";

		}else{
			echo "ERROR";
			echo "HCF-A & LCM-B & EXIT-X";
		}
		
	}while ($input != 'X');
