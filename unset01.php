<?php
	function destroy_aaa(){
		global $aaa;
		echo $aaa;
		unset($aaa);
		echo $aaa;
	}
	
	$aaa = 'fesfesrfef';
	destroy_aaa();
	echo $aaa;
?>