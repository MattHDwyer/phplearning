<?php
	$jsonfile = '../items/movies.json';
	$jsondata = file_get_contents($jsonfile);
	$json = json_decode($jsondata, true);

	$response_body = file_get_contents('php://input');
	echo $response_body;
	$response_decode = json_decode($response_body, true);
	
	$title = htmlentities($response_decode['title'] /*??""  shorthand for isset */ );
	$year = htmlentities($response_decode['year']);
	$price = htmlentities($response_decode['price']);
	$price = filter_var($price, FILTER_VALIDATE_FLOAT);
	$genre = htmlentities($response_decode['genre']);
	$synopsis = htmlentities($response_decode['synopsis']);
	
	if($title != null && $year != null && $price != null && $genre != null && $synopsis != null) {
		$arr = array('title'=>$title, 'year'=>$year, 'price'=>$price, 'genre'=>$genre, 'synopsis'=>$synopsis);
		array_push($json, $arr);
		file_put_contents($jsonfile, json_encode($json, JSON_PRETTY_PRINT));
		echo "Post successful";
	}

	
?>