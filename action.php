<?php include "includes/db.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/log.css">
    <title>Log In or Sign Up</title>
</head>
<body>
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="./includes/signup.php" method="post">
			<h1>Sign Up</h1>
			<span>Create an account</span>
			<input type="text" name="sign_name" placeholder="Name" />
			<input type="email" name="sign_email" placeholder="Email" />
			<input type="password" name="sign_pass" placeholder="Password" />
			<button value="signup" name="signup">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="./includes/login.php" method="post">
			<h1>Log in</h1>
			<span>Use your account</span>
			<input type="email" name="log_email" placeholder="Email" />
			<input type="password" name="log_pass" placeholder="Password" />
			<button name="login" value="login">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>


<script src="./js/log.js"></script>
</body>
</html>