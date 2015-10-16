<?php
	/*
	Comparing with other structures like "if" , "while" and "for", "switch...case" here has its own special format:
	No need of using "{}" to point out command groups.
	So, certainly, patience is needed.
	
	NOTICE!  The switch structure names "switch...case", not "select...case" (like what you've learnt on VB)!
	*/
	
	//Original data for the program
	$score = 70;
	
	//Show original data
	//String connector type 1 (for variable)
	echo "成绩：$score";
	//String connector type 2 (universal)
	echo "成绩：" . $score;
	
	//Main commands
	switch($score) {
		case $score >= 90:			//NOTICE! Here, use ":" instead of ";"!
			echo "<br/>优秀";
			break;					//"break" plays a role as a ending sign of each case
		case $score >= 80:
			echo "<br/>良好";
			break;
		case $score >= 60:
			echo "<br/>合格";
			break;
		default:
			echo "<br/>不合格";
	}
	
	//Test without "break;"
	//Reset score larger than 90 in order to show the result 
	$score = 100;
	
	echo "<br/>==================接下来的语句中我没有用到 break 语句==============================<br/>";			//Scatter
	switch($score) {
		case $score >= 90:			//NOTICE! Here, use ":" instead of ";"!
			echo "<br/>优秀";
			//break;					
		case $score >= 80:
			echo "<br/>良好";
			//break;
		case $score >= 60:
			echo "<br/>合格";
			//break;
		default:
			echo "<br/>不合格";
	}	
	
	/*
	Yeah. After testing, here is a assumption:
	Without "break", the commands after the relevant case will be executed. So it will result in a mess.
	*/
?>