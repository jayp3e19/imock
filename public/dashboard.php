<?php
	include_once('app/models/conf.php');
	if (isset($_SESSION['level'])) {
		if (intval($_SESSION['level'])==1) {
		require_once('admin.php');
		}
		if (intval($_SESSION['level'])==0){
			require_once('student.php');
		}
	}
	else{
		require_once('/public');
	}
?>