<?php include('config.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title> Sign up </title>
	<link rel = "stylesheet" type = "text/css" href = "css/style.css" >
	<meta charset = "UTF-8">
	<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
	<meta name = "author" content = "Genesis Alarcon">
</head>
<body class = "signup">

	<h3 style = "position: absolute; top: 80px; left: 10px; color: #F8F7F8"> Sign up </h3>

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
	<form method = "POST" action = "signup.php">
		<?php include('errors.php'); ?>

		<label style = "top: 150px; left: 80px"> First Name </label>
		<input style = "top: 173px; left: 80px" type = "text" name = "fName" value = "<?php echo $firstName; ?>">
		<label style = "top: 150px; left: 300px"> Last Name </label>
		<input style = "top: 173px; left: 300px" type = "text" name = "lName" value = "<?php echo $lastName; ?>">
		<label style = "top: 230px; left: 80px"> Email </label>
		<input style = "top: 253px; left: 80px" type = "email" name = "email" value = "<?php echo $email; ?>">
		<label style = "top: 230px; left: 300px"> Mobile </label>
		<input style = "top: 253px; left: 300px" type = "text" name = "mobile" value = "<?php echo $mobile; ?>">
		<label style = "top: 310px; left: 80px"> Password </label>
		<input style = "top: 333px; left: 80px" type = "password" name = "password" value = "<?php echo $password; ?>">
		<label style = "top: 310px; left: 300px"> Repeat Password </label>
		<input style = "top: 333px; left: 300px" type = "password" name = "rPassword" value = "<?php echo $rPassword; ?>">

		<button class = "myButton" type = "submit" name = "register" style = "position: absolute; top: 430px; left: 80px;"> Register </button>
		
	</form>
	</div>

</body>
</html>