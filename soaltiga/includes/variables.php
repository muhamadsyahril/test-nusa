<?php
	//database configuration
	$host ="localhost";
	$user ="root";
	$pass ="g3mb0k";
	$database = "nusadb";
	$connect = new mysqli($host, $user, $pass,$database) or die("Error : ".mysql_error());
?>