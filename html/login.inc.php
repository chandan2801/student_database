<?php
	require 'core.inc.php';
	require 'connect.inc.php';

	if(logged_in())
	{
		$first_name=getuserfield('firstname');
		$last_name=getuserfield('lastname');
		$email_id=getuserfield('email_id');
		$username=getuserfield('username');
		$profession=getuserfield('profession');
		if($profession=='Student')
		{
			header('Location: stprofile.php');
		}
		else
		{
			echo 'You are logged in as faculty.';
		}
	}
	else
	{
		include 'login.php';
	}
?>