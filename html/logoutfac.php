<?php
	require 'core.inc1.php';
	session_destroy();
	header('Location: login.inc.php');
?>