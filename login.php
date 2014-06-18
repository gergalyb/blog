<!DOCTYPE html>
<html>
	<head>
		<title>login.php</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>
		<form name="form_login" method="post" action="checklogin.php">
			<b>username</b>
			<input name="username" type="text" id="username">
			<br>
			<b>password</b>
			<input name="password" type="text" id="password">
			<br>
			<input type="submit" name="submit" value="Login">
		</form>
	</body>
</html>