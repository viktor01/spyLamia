<?php

if ($_REQUEST) {
	
//Connect to the database	
$link = mysqli_connect("sql5.freesqldatabase.com", "sql554975", "pE6*qM3%", "sql554975", "3306");

	//if exist any error, exit
	if (! $link){
		echo("Cannot connect to database");
		die();
	
	}
	
	//get destiny URL
	$url_d = $_REQUEST ["url"];
	
	//get Previous URL
	$url_s = $_SERVER['HTTP_REFERER'];
	
	//Insert values in Database
	$query = "INSERT INTO spyt (url_d, url_s) VALUES ('$url_d','$url_s')";
	$result = mysqli_query($link, $query);
	
	//Redirect to destiny URL
	header("Location:$url_d/");
	exit;

}

?>