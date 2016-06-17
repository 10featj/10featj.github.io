<?php
require('connect.php');
if (isset($_POST["email"])){
	$email = $_POST['email'];
	$sql = "INSERT into users(email) values ('$email')";
	mysql_query( $sql);

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
}else{}

?>



