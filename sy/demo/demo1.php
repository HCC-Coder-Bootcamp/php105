<?php

/* Demo 1 : Count form 0 - 10 ;  */
	
	$i = 0;
	
	/* while first;
	while ($i <= 10) {

		echo $i ++ ;
	} */

	//do first;
	do {

	 echo $i ++ ;

	} while ($i <= 10);

/*（如果$i小于十，对，就run进去，
先echo $i 然后+1，
--他会一直重复计算上面这个公式，直到 $i 等于大于十，因为不符合我们的要求了。）
错的话，就会进入下一个section. */