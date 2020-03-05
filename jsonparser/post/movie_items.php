<?php
	$jsonfile = '../items/movies.json';
	$jsondata = file_get_contents($jsonfile);
	$json = json_decode($jsondata, true);



{
		$title = htmlentities($_POST['title']);
		$year = htmlentities($_POST['year']);
		$price = htmlentities($_POST['price']);
		$price = filter_var($price, FILTER_VALIDATE_FLOAT);
		$genre = htmlentities($_POST['genre']);
		$synopsis = htmlentities($_POST['synopsis']);
		
		$arr = array('title'=>$title, 'year'=>$year, 'price'=>$price, 'genre'=>$genre, 'synopsis'=>$synopsis);

		// var_dump(json_encode($arr,JSON_PRETTY_PRINT));
		array_push($json, $arr);
		file_put_contents($jsonfile, json_encode($json, JSON_PRETTY_PRINT));
		echo "Post successful";
	}
	echo "API HIT"
?>