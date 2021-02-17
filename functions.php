<?php
function passCrypt($password){
	$hashFormat = "$2y$12$";
	$salt = "KfDkadl5vneiJDWp45dqQ1";
	$hashFormat_salt = $hashFormat.$salt;
	$password = crypt($password, $hashFormat_salt);
	return $password;
}

function connectDatabase() {
	return mysqli_connect("localhost", "root", "", "users");
}
?>