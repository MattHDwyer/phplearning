<?php 
	$user = array(
		'name' => 'Brad',
		'email' => 'brad@test.com',
		'age' => 35
	);

	$user = serialize($user);

	setcookie('user', $user, time() + 3600);

	$user = unserialize($_COOKIE['user']);

	echo $user['name'];
?>