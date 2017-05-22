<?php
	$mysql_error='could not connect';
	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_password='';
	$mysql_db='iwt_studentdb';
	$handle = @mysqli_connect($mysql_host, $mysql_user, $mysql_password, $mysql_db);
	/*if(!$handle || !@mysqli_select_db($handle, $mysql_db))
	{
		die($conn_error);
	}*/
?>