<?php

include("connect.php");

/* Deleting the follow row if the unfollow */

if (isset($_POST['email'], $_POST['saved_job'])) {
	$email = $_POST['email'];
	$saved_job = $_POST['saved_job'];
	$sql = "Delete from saved_jobs where email ='$email' and saved_job='$saved_job' ";
	mysql_query( $sql);

	if ($conn->query($sql) === TRUE) {
		
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
    } 



?>