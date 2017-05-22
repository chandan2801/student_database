<?php
	ob_start();
	@session_start();
	require 'connect.inc.php';
	$current_file=$_SERVER['SCRIPT_NAME'];
	if(isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
	{
		$http_referer=$_SERVER['HTTP_REFERER'];
	}
	function logged_in1()
	{
		if(isset($_SESSION['id']) && !empty($_SESSION['id']))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	function getuserfields($field)
	{
		require 'connect.inc.php';
		$query="SELECT $field from faculty where user_id='".$_SESSION['id']."'";
		if($query_run=mysqli_query($handle,$query))
		{
			while($query_row=mysqli_fetch_assoc($query_run))
			{
				return $query_row[$field];
			}
		}
	}
?>