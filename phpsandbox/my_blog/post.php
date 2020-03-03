<?php
	require('config/config.php');
	require('config/db.php');

	// Check for Submit:
		if(isset($_POST['delete'])){
			// Get form data:
			$delete_id = mysqli_real_escape_string($conn, $_POST['delete_id']);
			
			$query = "DELETE FROM posts WHERE id = {$delete_id}";
	
			if(mysqli_query($conn, $query)){
				header('Location: '.ROOT_URL.'');
			} else {
				echo 'ERROR: '.mysqli_error($conn);
			}
		}
	

	// Get ID
	$id =  mysqli_real_escape_string($conn, $_GET['id']);

	// Create query:
	$query = 'SELECT * FROM posts WHERE id = '.$id;

	// Get Result:
	$result = mysqli_query($conn, $query);

	// Fetch Data:
	$post = mysqli_fetch_assoc($result);
	// echo '<pre>';
	// var_dump($posts);
	// echo '</pre>';

	// Free Result:
	mysqli_free_result($result);
	
	// Close Connection:
	mysqli_close($conn);

?>


<?php include('inc/header.php') ?>
	<div class="container">
		<h1><?php echo $post['title']; ?></h1>		
		<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
		<br>
		<a href="<?php echo ROOT_URL;?>edit_post.php?id=<?php echo $post['id'];?>" class="btn btn-default">EDIT</a>
		<hr>
		<p><?php echo $post['body']; ?></p>
		<hr>
		<form class="float-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']?>">
			<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
			<input type="submit" name="delete" value="Delete" class="btn btn-danger">
		</form>
		<a class="btn btn-default" href="<?php echo ROOT_URL?>">Back</a>
	</div>
<?php include('inc/footer.php') ?>