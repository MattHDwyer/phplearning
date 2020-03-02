<?php 

	echo date('d').'<br>';		// Day
	echo date('m').'<br>';		// Month
	echo date('Y').'<br>';		// Year (upper case full year, lower case abbreviation)

	echo date('l').'<br>';		// Day of the week (lower case l)

	echo date('d/m/Y').'<br>';	// can use multiple
	
	echo '<br>';

	# Time:
	
	// Setting Timezone:
	date_default_timezone_set('Australia/Melbourne');

	echo date('h').'<br>';		// Hour
	echo date('i').'<br>';		// Minute
	echo date('s').'<br>';		// Seconds
	echo date('a').'<br>';		// AM or PM


	echo 'Time in Melbourne '.date('h:i:sa').'<br>';	// Combined
	echo '<br>';


	#Timestamps:

	$timestamp = mktime(10,34,54, 2, 8, 1998);

	echo $timestamp; // Will show display a Unix Timestamp. This is a long integer that contains the number of seconds between the Unix epoch and specific time.

	echo '<br>'.date('m/d/Y h:i:sa', $timestamp).'<br>';
	echo '<br>';

	$timestamp2 = strtotime('8pm May 16 2019'); // Very specific but can be vague, e.g.:

	$timestamp3 = strtotime('tomorrow');

	$timestamp4 = strtotime('next Monday');

	$timestamp5 = strtotime('+4 years');

	/*
		For more, go to:

		php.net/manual/en/function.date.php

	*/

	echo 'Timestamp2: '.date('m/d/Y h:i:sa'.'<br>', $timestamp5)


?>