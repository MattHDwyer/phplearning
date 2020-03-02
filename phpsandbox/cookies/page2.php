<?php 
	// TO CHANGE A COOKIE YOU CAN:
	// setcookie('username', 'Frank', time()+60);

	// TO DELETE A COOKIE:
	// setcookie('username', 'Frank', time()-3600);

	if(count($_COOKIE) > 0){
		echo 'There is '.count($_COOKIE).' cookies saved. <br>';
	} else {
		echo 'There are 0 cookies saved';
	}

	if(isset($_COOKIE['username'])){
		echo 'User '.$_COOKIE['username'].' is set <br>';
	} else {
		echo 'User is not set';
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
	
</body>
</html>