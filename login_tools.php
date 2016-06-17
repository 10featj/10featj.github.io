<?php

function validate($conn, $email = '' ,$pass = '')
{	
	$errors = array();
	if (empty($email)){
		$errors[] = 'Please enter you email.';
	} else {
		$e = mysqli_real_escape_string($conn, trim($email));
	}
	
	if (empty($pass)){
		$errors[] = 'Please enter yours password.';
	}else{
	 $p = mysqli_real_escape_string($conn, trim($pass));
	}
	
	if (empty($errors)){
		$q = "select * from users where email ='$e' and password = SHA1('$p')";
		$r = mysqli_query($conn,$q);
		
		if (mysqli_num_rows($r) == 1) {
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			return array(true, $row);
			header("Location: index.php");
		}else{
			$errors[] = 'Username and password not found.';
		}
	}
return array(false, $errors);
}

?>