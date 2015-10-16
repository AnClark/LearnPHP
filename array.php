<?php
	//用赋值法构建数组
	$cd[0] = "在别处";
	$cd[1] = "那一年";
	$cd[2] = "时光漫步";
	$cd[3] = "每一刻都是崭新的";
	$cd["four"] = "爱如少年";
	$cd["newest"] = "灿烂";
	
	//输出数组内容（主要是为了测试字符串索引）
	echo $cd[0];
	echo $cd["four"];
	echo $cd["newest"];
	
	//输出数组全部内容
	echo "<br>";
	print_r($cd);
	
	//用 array 函数构建数组
	$arr = array(1 => true, 2 => "false", 3 => 0);
	//循环语句输出数组
	for($i=1; $i<=3; $i++)
	{
		echo $arr[$i];
		echo "<br>";
	}
?>