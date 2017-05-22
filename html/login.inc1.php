<?php
	require 'core.inc1.php';
	require 'connect.inc.php';

	if(logged_in1())
	{
		$first_name=getuserfields('Firstname');
		$last_name=getuserfields('Lastname');
		$email_id=getuserfields('Email_id');
		$username=getuserfields('Username');
		$profession=getuserfields('profession');
		if($profession=='Faculty')
		{
			include 'faculty.php';
		}
		else
		{
			echo 'You are logged in as student.';
		}
	} 
	else
	{
		include 'login.php';
	}
?>