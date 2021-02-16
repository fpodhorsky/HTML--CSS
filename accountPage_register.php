<?php
include("functions.php");
 if (!empty($_POST["register"])) {
 	$name = $_POST["name"];
 	$surname = $_POST["surname"];
 	$email = $_POST["email"];
 	$password = passCrypt($_POST["password"]);


 	if ($name && $surname && $email && $password) {
 		$connection = connectDatabase();
 		$query = "INSERT INTO userinfo(name, surname, email, password) VALUES ('$name', '$surname', '$email', '$password')";
 		$result = mysqli_query($connection,$query);
 		echo "<h2>Registration successful.</h2><br>Now you can <a href='loginPage.php'>Log In</a>";

 	if (!$result) {
 		die("Something went wrong in the database!");
 	}
 	if (!$connection) {
 		die ("Something went wrong!");
 	}
 	} else {
 		echo "Some line was not filled.";
 		}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>File express</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>	
<div class="mainCard">		
			<div class="container">
				<div class="logo">
					<img src="paperairplane.jpg">
				</div>
				<h1>File express</h1>
			</div>
			<div class="navbar">
				<nav>
					<ul>
						<li><a href="index.php" class="underlineEff">Home</a></li>
						<li><a href="accountPage.html" class="underlineEff">Account</a></li>
						<li><a href="aboutUsPage.html" class="underlineEff">About us</a></li>
					</ul>
				</nav>
		</div>
	

	<div class="container2">
		<div class="secondCardPosition">
			<form method="post" class="formRegister">
				<p>Registration</p>
				<input type="text" name="name" placeholder="Name"><br><br>
				<input type="text" name="surname" placeholder="Surname"><br><br>
				<input type="email" name="email" placeholder="Email"><br><br>
				<input type="password" name="password" placeholder="Password"><br><br>
				<input type="submit" name="register" value="Register">
			</form>
		</div>	
		<div class="slogan">
			<p>
				Send it faster!
			</p>
		</div>
	</div>
	<div class="container3">
		<p>
			© 2021 | All rights reserved
		</p>
	</div>
</div>
</body>
</html>