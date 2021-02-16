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
	<title>
		
	</title>
</head>
<body>
	<form method="post">		
		<p>Log in</p>
		<input type="text" name="email" placeholder="E-mail">
		<input type="password" name="password" placeholder="Password"><br><br>
		<input type="submit" name="login" value="Log in">
	</form>

</body>
</html>