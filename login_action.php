<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	require('connect.php');
	require('login_tools.php');
	list($check, $data) = validate ($conn, $_POST['email'], $_POST['pass']);

	if($check){
		session_start();
		$_SESSION['loggedin'] = true;
		$_SESSION['email'] = $data['Email'];
		$_SESSION['userid'] = $data['user_id'];
		$_SESSION['Progress'] = $data['account_progress'];
		header("Location: index.php");
	}
	else{$errors = $data;}
	mysqli_close($conn);
}
include('login.php');

?>
