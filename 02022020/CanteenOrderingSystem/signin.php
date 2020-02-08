<!DOCTYPE html>
<html>
<head>
	<title> Sign in </title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<meta name = "author" content = "Genesis Alarcon">
</head>
<body>

	<h3 style = "position: absolute; top: 10px; left: 10px"> Home / Sign in </h3>

	<div class = "main" >
				<ul>
					<li> <a href = "index.html" > Home </a> </li>
					<li> <a href = "#" > Food Menu </a> </li>
					<li> <a href = "#" > Categories </a> </li>
					<li> <a href = "signup.php" > Sign up </a> </li>
					<li class = "active"> <a href = "#" > Sign in </a> </li>
				</ul>	
	</div>

	<form>
		<div class = "signinForm">
		<label style = "top: 190px; left: 650px"> Email/Mobile </label>
		<input style = "top: 213px; left: 625px" type = "email" name = "email">
		<label style = "top: 250px; left: 660px"> Password </label>
		<input style = "top: 273px; left: 625px" type = "password" name = "password">

		<button type = "submit" name = "login" style = "position: absolute; top: 350px; left: 678px;"> Login </button>
		</div>
	</form>

</body>
</html>