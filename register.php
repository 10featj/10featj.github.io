<?php 
$page_title = 'Register';
require 'connect.php';


 
?>

<html>
<head>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/forms.css">
</head>
<body>
<section class="container">
	<h1>Register</h1>
		<form action="registerval.php" method="POST">
			<select name="title" class="tl" value="0" required autofocus>
				<option value ="0">Title</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
				<option value="Miss">Miss</option>
				<option value="Dr">Dr</option>
				<option value="Other">Other</option>
			</select>
			<input type="text" class="fn" name="first_name" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name'];?>" placeholder="First Name" required>
			<input type="text" class="f" name="last_name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name'];?>" placeholder="Last Name" required>
			<input type="text" class="em" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>" placeholder="Email" required>
			<input type="text" class="f" name="pass1" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1'];?>" placeholder="Password" required>
			<input type="text" class="f" name="pass2" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2'];?>" placeholder="Repeat Password" required></br>
			<label class="terms">I Agree to <a href="#">Terms & Conditions</a>&nbsp;&nbsp;</label><input type="checkbox" name="terms" value="Y"> 
			<input type="submit" value="Register"></p>
		</form>
</section>

</body>
</html>





