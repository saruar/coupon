<?php
	define("DB_HOST","localhost");
	define("DB_NAME","saruarfi_bellabefacial");
	define("DB_USER","saruarfi_bellabe");
	define("DB_PASSWORD","5)l41v^g8{t1");
	define("BASE_PATH","http://saruar5.mavrickit.us/bellabe/coupon");
	
	$link = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Unable to connect to database");
	define("LINK", $link);
	mysql_select_db(DB_NAME,LINK) or die("Unable to Select Database");
?>