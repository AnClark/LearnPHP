<?php
	/*
	尝试用PHP求出勾股数
	*/
	//求勾股数的上界，亦即求多少以内的所有勾股数
	define('BOUND', 100);
	
	for($i=1; $i <= BOUND; $i++) {
		for($j=1; $j <= BOUND; $j++) {
			for($k=1; $k <=BOUND; $k++) {
				if(pow($i,2) + pow($j,2) == pow($k,2)) {
					echo "$i   $j   $k";
					echo "<br>";
				}
			}
		}
	}
	
	

?>