<?php 

	session_start();

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP SESSIONS</title>
	<h5>
		Thank you <?php echo $name; ?>. You have subscribed with email <?php echo $email; ?>
		<br>
		<button><a style="text-decoration: none;" href="page3.php">CONTINUE</a></button>
	</h5>
</head>
<body>
	
</body>
</html>