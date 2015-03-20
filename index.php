<?php
	include_once("include/session.php");
	if( logged() )
	{
		header("Location: user/index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Data Engineering project</title>
</head>
<body>
	<form action="login.php" method="post">
		Password :<input type="password" name="pw">
		<input type="submit" value="Submit">
	</form>
</body>
</html>
