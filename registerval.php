<?PHP
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST')	{
$errors = array();

	if ($_POST['title'] =="0") {
	$errors[] = 'Please Select a title';}
	else { $title = mysqli_real_escape_string($conn, trim($_POST['title']));}

	if (empty($_POST['first_name'])) {
	$errors[] = 'Enter your first name.';}
	else { $fn = mysqli_real_escape_string($conn, trim($_POST['first_name']));}
	
	if (empty($_POST['last_name'])) {
	$errors[] = 'Enter your last name.';}
	else { $ln = mysqli_real_escape_string($conn, trim($_POST['last_name']));}
	
	if (empty($_POST['email'])) {
	$errors[] = 'Enter your email address.';}
	else { $e = mysqli_real_escape_string($conn, trim($_POST['email']));}
	
	if (!empty($_POST['pass1'])) 
	{
		if ($_POST['pass1'] != $_POST['pass2']) 
		{$errors[] = 'Your passwords do not match.'; }
		else 
		{
		$p = mysqli_real_escape_string($conn, trim($_POST['pass1']));
		}
	}
	else {$errors[] = 'Enter Your Password';}
	
	if ($_POST['terms'] == ""){
		$errors[] = 'Please read Terms And accept';
	}
	
	if (empty($errors)) {
		$q = "select * from users where Email='$e'";
		$r = mysqli_query($conn, $q);
		if (mysqli_num_rows($r)!=0)
		{$errors[] = 'Email Address is already in use. <a hred="login.php">Login</a>';}
	}
	
	if (empty($errors)){
		$q ="insert into users (title,FirstName,LastName,Email,Password,signup_date,account_progress) VALUES ('$title','$fn','$ln','$e',SHA1('$p'),NOW(),'10')";
		$r = mysqli_query($conn,$q);
		
		if($r)
		{
		echo '<h1> Registered! </h1>
				<p>You have now registered.</p>
				<p><a href="login.php">Login</a></p>';
				
		}else {Echo 'insert broke';}
		
		mysqli_close($conn);
		
		exit();
	} else {
	echo '<h1>Errors!</h1>
	<p id="err_msg"> The following errors accured: <br>';
	foreach ($errors as $msg)
	{
	echo " - $msg<br>";
	}
	echo 'Please try again</p>';
	
	
	}

} 