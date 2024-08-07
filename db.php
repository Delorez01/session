<?php 

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'sessionnn');

	if (!$connect) {
		die("Connection failed " . mysqli_connect_error());
	}

?>