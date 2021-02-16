<?php
	include("functions.php");
 if (isset($_POST["login"])) {
 	$email = $_POST["email"];
 	$password = passCrypt($_POST["password"]);

 	if ($email && $password) {
 		$connection = connectDatabase();
 		$query = "SELECT * FROM userinfo WHERE email='$email' AND password='$password'";
 		$result = mysqli_query($connection,$query);
		$numrows = mysqli_num_rows($result);


if ($numrows!=0) {
//while loop
  while ($row = mysqli_fetch_assoc($result))
  {
    $dbemail = $row['email'];
    $dbpassword = $row['password'];
  } header("Location: mainPage.php");
  exit;

}
else {
  echo "user does not exist!";
}
} 
else {
    die("Please enter a username and password!");
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
		<div class="secondCard">
			<form method="post" class="formLogin">		
				<p>Log in</p>
					<input type="email" name="email" placeholder="E-mail"><br>
					<input type="password" name="password" placeholder="Password"><br><br>
					<input type="submit" name="login" value="Log in">
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