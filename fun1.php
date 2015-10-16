<?php
	function fun1() {
		static $num=0;
		$num += 1;
		echo $num . '  ';
	}
	function fun2() {
		$num=0;
		$num += 1;
		echo $num . '  ';
	}
	
	echo "Values in fun1():";
	for($i=0; $i<10; $i++){
		fun1();
	}
	
	echo "Values in fun2():";
	for($i=0; $i<10; $i++){
		fun2();
	}
	
?>