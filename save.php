<?php

include("connect.php");

 
if (isset($_POST['email'], $_POST['saved_job'])) {
	$email = $_POST['email'];
	$saved_job = $_POST['saved_job'];
	$sql = "INSERT into saved_jobs(email,saved_job) values ('$email','$saved_job')";
	mysql_query( $sql);

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
    } 



?>