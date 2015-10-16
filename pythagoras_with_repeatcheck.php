<?php
	/*
	尝试用PHP求出勾股数，并且防止出现重复的组合（如“3，4，5”和“4，3，5”）
	*/
	
	define('BOUND', 100);
	
	//用数组存储勾股数：$aaa 存储勾，$bbb 存储股，$ccc 存储弦
	//数组的索引变量：x
	$x = 1;
	
	for($i = 1; $i <= BOUND; $i++) {
		for($j = 1; $j <= BOUND; $j++) {
			for($k = 1; $k <=BOUND; $k++) {
				if(pow($i,2) + pow($j,2) == pow($k,2)) {
					$aaa[$x] = $i;
					$bbb[$x] = $j;
					$ccc[$x] = $k;
					$x++;
				}
			}
		}
	}
	
	//Put down the count of results
	//The total has to be fixed in order to avoid getting out of bound
	$total = $x - 1;
	
	echo $total . "<br>";		//For debug
	var_dump($aaa); echo "<br>";	//For Debug
	

	//Check for repeat
	for($i = 1; $i <= $total; $i++) {
		for($j = $i;$j <= $total; $j++) {
			if($aaa[$i] == $bbb[$j]) {				//程序正常，然而这一步出现了 Undefined Offset 的错误。究其原因是 total 总数变量值比实际的元素个数多 1。
				$aaa[$j] = 0;
				$bbb[$j] = 0;
				$ccc[$j] = 0;
			}
		}
	}
	
	//Print result
	echo "以下是从 1 到 " . BOUND . " 的勾股数 <br>";
	
	for($i = 1; $i <= $total; $i++) {
		if(($aaa[$i] != 0) && ($bbb[$i] != 0) && ($ccc[$i] != 0)) {
			echo $aaa[$i] . '  ' . $bbb[$i] . '  ' . $ccc[$i] . '  ' . "<br>";
		}
	}
?>