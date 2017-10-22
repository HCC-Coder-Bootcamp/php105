<?php 
	$input = readline();
	$inputt = $input;
	$total = 0;
	while ($input != 0) {
		$total = ($total + ($input % 10)) * 10;
		$input = ($input - ($input % 10)) / 10;		
	} 
	if ($total / 10 == $inputt) {
		echo "$inputt is palindrome";			
	}else{
		echo "$inputt is not palindrome";
	}
	


	
	



			
	
	