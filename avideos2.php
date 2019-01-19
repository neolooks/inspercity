<?php

	//connect this page to the  database
	require 'db_connection.php';

/*
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
*/
	
    $title 		= $_REQUEST['title'];
    $link 		= $_REQUEST['link'];
    $description 	= $_REQUEST['description'];


	
	//create a dynamic sql command by using the above values
	
	$sql  = "insert into video (title,link,description) values(";
	$sql .= "'$title',";
	$sql .= "'$link',";
	$sql .= "'$description')";

	//echo $sql;
	
	$x = $mysqli->query($sql);
	
	if($x>0){
		echo " successfull";
		}
	else{
		echo "failed";
	}
	

?>
<hr>
<a href="aStories.php">stories</a>
<a href="aVideos.php">videos</a>
<a href="aQoutes.php">qoutes</a>