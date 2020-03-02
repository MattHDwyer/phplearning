<?php
	# CONDITIONALS

	/* 
		==	: equals
		===	: identical
		<	: less than
		>	: greater than
		<=	: less than or equal to
		>=	: greater than or equal to
		!=	: not equal
		!==	: not identical
	*/

	/* 
		Logical Operators:

		and	: &&
		or	: ||
		xor	: XOR (means one has to be true, but not both)
	*/

	$num = 6;

	if($num == 5){
		echo '5 passed <br>';
	} else {
		echo 'no pass<br>';
	}

	if($num === '5'){
		echo '5 passed <br>';
	} else {
		echo "$num not identical to '5' <br>";
	}

	if($num == 6){
		echo "$num passed <br>";
	} elseif ($num == 5){
		echo 'it pased <br>';
	} else {
		echo 'elseif no pass <br>';
	}

	# Nested IF statements:

	if($num > 4){
		if($num <10){
			echo "$num passed <br>";
		} else{
			echo "$num no pass<br>";
		}
	} else {
		echo "$num no pass<br>";
	}

	# Logical Operators:

	if($num > 4 XOR $num < 10){
		echo "$num passed logical operators!<br>";
	} else {
		echo "$num no pass AND test<br>";
	}

	# Switches:

	$favColour = 'asdf';

	switch($favColour){
		case 'red':
			echo "Your favourite colour is red<br>";
		break;

		case 'blue':
			echo "Your favourite colour is red <br>";
		break;

		default:
			echo "Your favourite colour is something else <br>";
		break;

	}

?>