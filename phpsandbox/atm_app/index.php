<?php 
	require('config/config.php');
	require('config/db.php');
	// Create query:
	$users_query = 'SELECT * FROM users';
	$accounts_query = 'SELECT * FROM accounts';

	// Get Result:
	$user_result = mysqli_query($conn, $users_query);
	$accounts_result = mysqli_query($conn, $accounts_query);

	// Fetch Data:
	$users = mysqli_fetch_all($user_result, MYSQLI_ASSOC);
	$accounts = mysqli_fetch_all($accounts_result, MYSQLI_ASSOC);
	echo '<pre>';
	var_dump($users);
	echo '</pre><br>';
	echo '<pre>';
	var_dump($accounts);
	echo '</pre>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>yourATM</title>
</head>
<body>
	
</body>
</html>