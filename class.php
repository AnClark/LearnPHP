<?php

	class Huster {
		var $name;
		var $faculty;
		var $grade;
		var $birthday;
		function out()
		{
			echo "现在输出 $name 的信息：<br>";
			echo "姓名：$name <br>";
			echo "专业：$faculty <br>";
			echo "班级：$grade $class";
		}
	}
	
	$p = new Huster;
	$p->name = "刘云中";
	$p->faculty = "法学";
	$p->grade = "2015";
	$p->birthday = "19970703";
	
	//直接输出
	echo $p->name . "<br>";
	echo $p->faculty . "<br>";
	echo $p->grade . "<br>";
	echo $p->birthday . "<br>";
	echo "<br>";
	
	//借助我定义的方法输出。经实验存在问题。
	$p->out();
	
?>
