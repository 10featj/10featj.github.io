<!DOCTYPE html>
<?php
	session_start();
?>

<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>FromUniToCarrer</title>
        <meta name="description" content="company is a free job board template">
        <meta name="author" content="Ohidul">
        <meta name="keyword" content="html, css, bootstrap, job-board">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/fontello.css">
        <link rel="stylesheet" href="css/animate.css">        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.css">
        <link rel="stylesheet" href="css/owl.transitions.css">
        <link rel="stylesheet" href="css/style.css">		
        <link rel="stylesheet" href="css/responsive.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>

        <!-- Body content -->
		

        <nav class="navbar navbar-default">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <!-- <a class="navbar-brand" href="#"><img src="img/logo.png" alt=""></a>    LOGO			  --><p>LOGO - 149 x 48  </p>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <div class="button navbar-right">
				<?php
				if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
						echo'
						
						<div class="dropdown">
						  <a href="profile.php"><button class="navbar-btn nav-button login" >Account</button></a>
						  <div class="dropdown-content">
							<a href="profile.php">My Account</a>
							<a href="#">uplaod Cv</a>
							<a href="savedjobs.php">Saved Jobs</a>
						  </div>
						</div>

						<a href="logout.php"><button class="navbar-btn nav-button" >Logout</button></a>
						';
					}else{	
						echo'<a href="#signin"><button class="navbar-btn nav-button login" >Login</button></a>
							<a href="#register"><button class="navbar-btn nav-button" >Sign up</button></a>
						';
					}
				?>


              </div>
              <ul class="main-nav nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Job Seekers</a></li>
                <li><a href="#">Employeers</a></li>
                <li><a href="#">About us</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav> 
		

		
			<!-- POP UP REG FORM -->	
		
<div id="register" class="modalDialog">
	<div>
	<div class="modalheader" ></div>
	  <h1>Register!</h1>
		<p>If you are a Recruiter please register <a href="recreg.php">here</a>.</p>
		<form action="registerval.php" method="POST">
			<select name="title" class="tl reg" value="0" required autofocus>
				<option value ="0">Title</option>
				<option value="Mr">Mr</option>
				<option value="Mrs">Mrs</option>
				<option value="Ms">Ms</option>
				<option value="Miss">Miss</option>
				<option value="Dr">Dr</option>
				<option value="Other">Other</option>
			</select>
			<input type="text" class="fn reg" name="first_name" value="<?php if (isset($_POST['first_name'])) echo $_POST['first_name'];?>" placeholder="First Name" required>
			<input type="text" class="f reg" name="last_name" value="<?php if (isset($_POST['last_name'])) echo $_POST['last_name'];?>" placeholder="Last Name" required>
			<input type="text" class="em reg" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email'];?>" placeholder="Email" required>
			<input type="text" class="f reg" name="pass1" value="<?php if (isset($_POST['pass1'])) echo $_POST['pass1'];?>" placeholder="Password" required>
			<input type="text" class="f reg" name="pass2" value="<?php if (isset($_POST['pass2'])) echo $_POST['pass2'];?>" placeholder="Repeat Password" required></br>
			<label class="terms">I Agree to <a href="#">Terms & Conditions</a>&nbsp;&nbsp;</label><input type="checkbox" name="terms" value="Y"> 
			<input type="submit" value="Register">
		</form><a href="#close">
	<button>Close</button></a>
	</div>
</div>
		
		<!-- POP UP signin FORM -->
		
<div id="signin" class="modalDialog">
	<div>
	<div class="modalheader" ></div>
	  <h1>Sign in!</h1>
		<p>If you are a Recruiter please Sign in <a href="recsign.php">here</a>.</p>
			<form action="login_action.php" method="POST">
		<input type="text" class="em reg" name="email">
		<input type="password" class="em reg" name="pass">	
		<input type="submit" value="Login">
	</form>
	<a href="#close"><button>Close</button></a>
	</div>
</div>	
		
		