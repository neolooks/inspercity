<?php

	$server     =  "localhost";
	$username   =  "root";
	$password   =  "";
	$database   =  "inspercity";
	
	  
	
	$mysqli = new mysqli($server,$username,$password,$database);

    if($mysqli->connect_error ){
		die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);		
	}
	
//echo "connection success.!";
	
?>