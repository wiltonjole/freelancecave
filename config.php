<?php
	// connecting to database server
	$con = mysqli_connect("localhost", "root", "roadtogreatness2018", "manifestodb");

	// check connection
	if(!$con){
		die("Connection Failed: ". mysqli_connect_error());
	}



?>