<?php
	//用 unset() 销毁函数引用传递的变量
	//验证结果：销毁函数引用传递变量后，引用传递失效。 
	
	function aaa(&$bbb){
		unset($bbb);
		$bbb = 'Hello';
	}
	
	$bbb = 'World';
	echo $bbb;
	
	aaa($bbb);
	echo $bbb;
	
?>