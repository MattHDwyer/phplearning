<?php
	if(isset($_POST['submit'])){
		$username = htmlentities($_POST['username']);
		
		// set cookie has: the session name, the user, the time.
		setcookie('username', $username, time()+3600 /* cookie is set for an hour*/);
		
		header('Location: page2.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="Enter Username">
		<br>
		<!-- <input type="text" name="email" placeholder="Enter Email"> -->
		<!-- <br> -->
		<input type="submit" name="submit" value="submit">
	</form>
</body>
</html>