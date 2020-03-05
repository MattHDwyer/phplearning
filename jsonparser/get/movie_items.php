<?php
	$jsonfile = '../items/movies.json';
	$jsondata = file_get_contents($jsonfile);
	
	$json = json_decode($jsondata, true);

	echo json_encode($json);