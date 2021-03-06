<?php 
	$msg = '';
	$msgClass='';

	// Check for submit:
	if(filter_has_var(INPUT_POST, 'submit')){
		// Get form data:
		$name = htmlspecialchars($_POST['name']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);

		// Check required fields"
		if(!empty($email) && !empty($name) && !empty($message)){
			// Passed
			// Check email
			if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
				// Failed
				$msg = 'Please use a valid email!';
				$msgClass='alert-danger';
			} else {
				// Passed				
				$toEmail = 'matthew@towersystems.com.au';
				$subject = 'Contact Request From '.$name;
				$body = '<h2> Contact Request </h2><br>
					<h4>Name: </h4> <p>'.$name.'</p><br>
					<h4>Email: </h4> <p>'.$email.'</p><br>
					<h4>Message: </h4> <p>'.$message.'</p><br>';

				// Email Headers:
				$headers = "MIME-Version: 1.0" ."/r/n";
				$headers .= "Content-Type:text/html;charset=UTF-8" . "/r/n";

				// Additional Headers:
				$headers .= 'From: '.$name.'<'.$email.'>'. '/r/n';

				if(mail($toEmail, $subject, $body, $headers)) {
					$msg = 'Email Sent';
					$msgClass='alter-success';
				}else {
					$msg = 'Your Email failed to send';
					$msgClass='alert-danger';
				}
			}
		} else {
			// Failed
			$msg = 'Please fill out all fields';
			$msgClass = 'alert-danger';
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://bootswatch.com/3/cosmo/bootstrap.min.css">
	<title>Contact Us!</title>
</head>
<body>
	<nav class="navbar navbar-default">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">My Website</a>
			</div>
		</div>
	</nav>
	<div class="container">
		<?php if($msg != '') : ?>
			<div class="alert <?php echo $msgClass; ?>"> 
				<?php echo $msg; ?>
			</div>
		<?php endif; ?>
		<form action="" method="post" <?php echo $_SERVER['PHP_SELF']; ?>>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="text" name="email" class="form-control" value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
			</div>
			<div class="form-group">
				<label>Message</label>
				<textarea name="message" class="form-control" cols="30" rows="10" ><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
			</div>
			<br>
			<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
</body>
</html>
