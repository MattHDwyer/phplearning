<?php
	// Check for posted data:
		if(filter_has_var(INPUT_POST, 'data')){
			echo 'Data found<br>';
		} else {
			echo 'No data<br>';
		}

		if(filter_has_var(INPUT_POST, 'data')){
			$email = $_POST['data'];

			// Remove illegal characters:

			$email = filter_var($email, FILTER_SANITIZE_EMAIL);
			echo $email.'<br>';

			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				echo 'Email is valid<br>';
			} else {
				echo 'Email is invalid<br>';
			}
		}

		#FILTER_VALIDATE_BOOLEAN
		#FILTER_VALIDATE_EMAIL
		#FILTER_VALIDATE_FLOAT
		#FILTER_VALIDATE_INT
		#FILTER_VALIDATE_IP
		#FILTER_VALIDATE_REGEXP
		#FILTER_VALIDATE_URL

		#FILTER_SANITIZE_EMAIL
		#FILTER_SANITIZE_ENCODED
		#FILTER_SANITIZE_NUMBER_FLOAT
		#FILTER_SANITIZE_NUMBER_INT
		#FILTER_SANITIZE_SPECIAL_CHARS
		#FILTER_SANITIZE_STRING
		#FILTER_SANITIZE_URL

		$var = 23;

		if(filter_var($var, FILTER_VALIDATE_INT)){
			echo 'var is a number<br>';
		} else {
			echo 'var isn'."'".'t a number<br>';
		}

		$number = '123ajbdfhip13u4079ba893';
		var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));

		$script = '<script>alert(1)</script>';
		echo filter_var($script, FILTER_SANITIZE_SPECIAL_CHARS);

		$filters = array(
			"data" => FILTER_VALIDATE_EMAIL,
			"data2" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" => 1,
					"max_range" => 100
				)
			)
		);
		echo '<br> <br> <br>';
		print_r(filter_input_array(INPUT_POST, $filters));
		echo '<br> <br> <br>';

		$arr = array(
			"name" => "william Craaig Henry",
			"age" => "30",
			"email" => "brad@gmail..com"
		);

		$filters2 = array(
			"name" => array(
				"filter" => FILTER_CALLBACK,
				"options" => "ucwords"
			),
			"age" => array(
				"filter" => FILTER_VALIDATE_INT,
				"options" => array(
					"min_range" => 1,
					"max_range" => 120
				)
				),
			"email" => FILTER_VALIDATE_EMAIL
		);

		print_r(filter_var_array($arr, $filters2));


?>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="data"> <br>
	<input type="text" name="data2"><br>
	<button type="submit">Submit</button>
</form>
<?php

?>