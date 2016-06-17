<?php 
$page_title = 'Login';
//if already logged in --

if (isset($errors)&&!empty($errors)){
	echo '<p id="err_msg">Oops! There was a problem: <br>';
	foreach ($errors as $msg)
		{echo "- $msg<br>";}
	echo 'Please try again or contact site admin';
}

?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $page_title ?> </title>
<link rel="stylesheet" href="css/forms.css">
</head>
<body>


<section class="container">
   <header id="log"><h2><u>Login</u></h2></header>
	<form action="login_action.php" method="POST">
		<input type="text" name="email">
		<input type="password" name="pass">	
		<input class="btn" type="submit" value="Login">
	</form>
	
</section>

</body>
</html>


