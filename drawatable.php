<?php
	$basement = '=';
	$spc = '  ';
	$heightpercell = 5;
	$widthpercell = 3;
	$line = 10;
	$column = 3;
	
	//画一整条线
	function drawsolid(){
		global $basement;
		global $widthpercell;
		global $column;
		$length = $widthpercell * $column + ($column + 1);
		//$height = $heightpercell * $line + ($line + 1);
		for($i=0; $i < $length; $i++){
			echo $basement;
		}
	}
	
	//画表格主体——包含空隙的
	function drawhollow(){
		global $basement;
		global $widthpercell;
		global $column;
		global $spc;
		$length = $widthpercell * $column + ($column + 1);
		
		//echo $basement;
		for($i=0; $i < $length; $i++){
			
			echo $basement;
		}
		
	}
	
	//测试一下代码是否正常
	drawsolid();
	echo "<br>";
	drawhollow();
?>