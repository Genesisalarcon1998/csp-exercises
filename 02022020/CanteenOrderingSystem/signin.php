<?php include('config.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title> Sign in </title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<meta name = "author" content = "Genesis Alarcon">
</head>

<body class = "signin">

	<h3 style = "position: absolute; top: 80px; left: 10px; color: #F8F7F8"> Sign in </h3>

	<div class = "main" >
				<ul>
					<li> <a href = "index.html" > Home </a> </li>
					<li> <a href = "#" > Food Menu </a> </li>
					<li> <a href = "#" > Categories </a> </li>
					<li> <a href = "signup.php" > Sign up </a> </li>
					<li class = "active"> <a href = "#" > Sign in </a> </li>
				</ul>	
	</div>

	<form class = "signInInfo" method = "POST" action = "signin.php">
		<?php include('errors2.php'); ?>

		<div class = "signinForm">
		<label style = "top: 230px; left: 683px"> Email </label>
		<input style = "top: 253px; left: 620px; text-align: center" type = "email" name = "email">
		<label style = "top: 310px; left: 668px"> Password </label>
		<input style = "top: 333px; left: 620px; text-align: center" type = "password" name = "password">

		<button class = "myButton" type = "submit" name = "login" style = "position: absolute; top: 430px; left: 655px"> Login </button>
		</div>
	</form>

</body>
</html>