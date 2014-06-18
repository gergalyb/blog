<!DOCTYPE html>
<?php session_start(); ?>
<html>
	<head>
		<title>home.php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<?php
			require("config.php");
			require("functions.php");

			checklogin();
		?>
		<a href="logout.php">Logout</a>
	</body>
</html>