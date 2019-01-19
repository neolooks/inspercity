<?php

	//connect this page to the  database
	require 'db_connection.php';

/*
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
*/

	


	
	//create a dynamic sql command by using the above values
	
	$sql  = "insert into qoutes (pic) values(";
	$sql .= "'temp.jpg')";

	//echo $sql;
	
	$x = $mysqli->query($sql);
	
	if($x>0){

		$last_id = mysqli_insert_id($mysqli);
		$uploaddir = getcwd().'/admin_images/qoutes/'.$last_id.'_qoutes.jpg';
		move_uploaded_file($_FILES['picture']['tmp_name'], $uploaddir);
		echo "success";
	}
	else{
		echo "failed";
	}

	
	

?>
<hr>
<a href="aStories.php">stories</a>
<a href="aVideos.php">videos</a>
<a href="aQoutes.php">qoutes</a>