<?php
	

	// $output = '<ul>';
	// foreach ($json as $movie) {
	// 	$output .= '<h4>'.$movie['title'].'</h4>';
	// 	$output .= '<li>'.$movie['year'].'</li>';
	// 	$output .= '<li>'.$movie['genre'].'</li>';
	// }
	// $output .= '</ul>';


	if(isset($_POST['submit'])){
		$title = htmlentities($_POST['title']);
		$year = htmlentities($_POST['year']);
		$year = htmlentities($_POST['price']);
		$genre = htmlentities($_POST['genre']);
		$synopsis = htmlentities($_POST['synopsis']);
		
		$arr = array('title'=>$title, 'year'=>$year, 'genre'=>$genre);

		array_push($json['movies'], $arr);

		file_put_contents($jsonfile, json_encode($json,JSON_PRETTY_PRINT));

		header('Location: index.php');/
	}
?>