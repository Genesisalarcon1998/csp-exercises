<?php include('server.php') ?>

<!DOCTYPE html>
<html lang = "eng">
<head>
	<title> Sign up </title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<meta name = "author" content = "Genesis Alarcon">
</head>
<body>

<h3 style = "position: absolute; top: 10px; left: 10px"> Home / Sign up </h3>

<div class = "main" >
				<ul>
					<li> <a href = "index.html" > Home </a> </li>
					<li> <a href = "#" > Food Menu </a> </li>
					<li> <a href = "#" > Categories </a> </li>
					<li class = "active"> <a href = "#" > Sign up </a> </li>
					<li> <a href = "signin.php" > Sign in </a> </li>
				</ul>	
</div>

<div class = "personalInfo">
<form id = "myInfo" method = "post" action = "signup.php" accept-charset = "UTF-8">

	<!-- <input type = "hidden" name = "submitted" id = "submitted" value = "1"> -->
	<label style = "top: 150px; left: 80px"> First Name </label>
	<input style = "top: 173px; left: 80px" type = "text" name = "fName">
	<label style = "top: 150px; left: 300px"> Last Name </label>
	<input style = "top: 173px; left: 300px" type = "text" name = "lName">
	<label style = "top: 230px; left: 80px"> Email </label>
	<input style = "top: 253px; left: 80px" type = "email" name = "email">
	<label style = "top: 230px; left: 300px"> Mobile </label>
	<input style = "top: 253px; left: 300px" type = "text" name = "mobile">
	<label style = "top: 310px; left: 80px"> Password </label>
	<input style = "top: 333px; left: 80px" type = "password" name = "password">
	<label style = "top: 310px; left: 300px"> Repeat Password </label>
	<input style = "top: 333px; left: 300px" type = "password" name = "rPassword">

	<button type = "submit" name = "register" style = "position: absolute; top: 380px; left: 80px;"> Register </button>

</form>
</div>

</body>
</html>