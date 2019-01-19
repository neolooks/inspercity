<?php

	//connect this page to the  database
	require 'db_connection.php';

/*
	echo "<pre>";
	print_r($_REQUEST);
	echo "</pre>";
*/
	
    $title 		= $_REQUEST['title'];
    $content 		= $_REQUEST['content'];
    $reference 	= $_REQUEST['reference'];

	


	
	//create a dynamic sql command by using the above values
	
	$sql  = "insert into stories (title,content,reference) values(";
	$sql .= "'$title',";
	$sql .= "'$content',";
	$sql .= "'$reference')";

	//echo $sql;
	
	$x = $mysqli->query($sql);
	
	if($x>0){

		$last_id = mysqli_insert_id($mysqli);
		$uploaddir = getcwd().'/admin_images/stories/'.$last_id.'_stories.jpg';
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