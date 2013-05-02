<?php
	session_start();
	include("config.php");
	include("class/class.login.php");
	$login = new Login();	
	if($_POST['log']==1) {
		$login->loginProcess();
	}
?>