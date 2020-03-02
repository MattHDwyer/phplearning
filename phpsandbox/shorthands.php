<?php
	$loggedIn = true;

	if($loggedIn) {
		echo 'You are logged in';
		echo '<br>';
	} else {
		echo 'You are not logged in';
		echo '<br>';
	}

	echo ($loggedIn) ? 'You are logged in <br>' : 'You are not logged in <br>';

	$isRegistered = ($loggedIn == true) ? true : false;
	echo $isRegistered.'<br>';

	$age = 9;
	$score = 11;
	
	echo 'Your score is: '.($score > 10 ? ($age > 10 ? 'Average' : 'Exceptional'):($age > 10 ? 'Horrible' : 'Average')).'<br>';
	
	
?>

<div>
	<?php if($loggedIn) { ?>
		<h1>Welcome User </h1>
	<?php } else { ?>
		<h1> Welcome Guest </h1>
	<?php } ?>
</div>

<div>
	<?php if($loggedIn): ?>
		<h1> Welcome user </h1>
	<?php else: ?>
		<h1> Welcome Guest </h1>
	<?php endif; ?>
</div>