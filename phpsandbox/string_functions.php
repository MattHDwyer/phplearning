<?php 
	# Substrings
	// substr()
	// returns a portion of a string

	$output1 = substr('Hello', 0, 5);
	// output2 will return the backend of a string:
	$output2 = substr('Hello', -2);
	echo $output1;
	echo "<br>";
	echo $output2;
	echo "<br>";

	# String Length
	// strlen()
	// Returns Length of a string

	$output3 = strlen("There is more");
	echo $output3;
	echo "<br>";

	#String position:
	// strpos()
	// Finds the position of the first occurence of a sub string

	$output4 = strpos('hello world', 'o');
	echo $output4;
	echo "<br>";
	// strrpos()
	// Finds the position of the last occurence of a sub string

	$output5 = strrpos('hello world', 'o');
	echo $output5;
	echo "<br>";

	# Trim:
	// trim();
	// Strips white space;
	
	$text = 'Hello World                ';
	var_dump($text);
	echo "<br>";

	$trimmed = trim($text);
	var_dump($trimmed);
	echo "<br>";

	# String to Upper
	// strtoupper();
	// Makes everything uppercase;

	$output6 = strtoupper('Hello World');
	echo $output6;
	echo "<br>";

	# String to Lower
	// strtolower();
	// Makes everything lowercase;

	$output6 = strtolower('Hello World');
	echo $output6;
	echo "<br>";

	#Capitalize Words
	// ucwords();
	// Capitalize every word;
	$output7 = ucwords('hello sir governor');
	echo $output7;
	echo "<br>";

	# String Replace:
	// str_replace()
	// Replace all occurences of a search string with a replacement:

	$text2 = 'Hello World';
	$output8 = str_replace('World', 'Everyone', $text2);
	echo $output8;
	echo "<br>";

	# Is a String:
	// is_string();
	// Checks if input's a string:
	// (Returns 1 if true, nothing if false);
	
	$val = 'Hello world';
	$output9 = is_string($val);
	echo $output9;
	echo '<br>';


	$values = array(true, 1, 'abc', null, '24', '', ' ', 12.3, "end of");
	foreach($values as $value) {
		if(is_string($value)) {
			echo $value;
			echo '<br>';
		};
	};

	# Compress a String
	// gzcompress();
	// Compresses a string:

	$text3 = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

	$compressed = gzcompress($text3);
	echo $compressed;
	echo '<br>';

	$text3_uncompressed = gzuncompress($compressed);
	echo $text3_uncompressed;

?>