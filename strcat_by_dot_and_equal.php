<?php

	$a = 'String';
	$b = 100;
	
	//Numeric with numeric
	$o1 = $b .= $b);
	echo $o1 ."<br>";
	
	//String with numeric
	$o2 = ($a .= $b);
	echo $o2 ."<br>";
	
	//Numeric with string
	$o3 = ($b .= $a);
	echo $o3 ."<br>";
	
?>