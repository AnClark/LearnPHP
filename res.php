<?php

	//资源数据类型测试：读取文件
	
	$file = fopen("test.txt","r");
	
	echo '下面是 var_dump 函数的输出';
	var_dump($file);
	echo "<br><br>";
	
	echo '下面是 echo 方式的输出';
	echo $file;
	echo "<br><br>";
	
?>