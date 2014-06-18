<?php
	require("config.php");

	function sql_con_check()
	{
		if (mysqli_connect_errno())
		{
  			die("Failed to connect to MySQL: " . mysqli_connect_error());
		}
	}

	function checklogin()
	{
		session_start();
		if($_SESSION['logged']==0)
		{
			header("location: login.php");
		}
		else
		{
			echo "welcome".$_SESSION['username'];
		}
	}
?>