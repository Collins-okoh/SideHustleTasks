<!DOCTYPE html>
<html>
<head>
	<title>Cookie</title>
</head>
<body>
	<fieldset>
		<legend><h1>User Details</h1></legend>
		<form method="post" action="cookie.php">
			<b>Firstname: </b><input type="text" name="user_firstname"><br><br>
			<b>Lastname: </b><input type="text" name="user_lastname"><br><br>
			<b>Email: </b><input type="email" name="user_email"><br><br>
			<input type="submit" name="submit">		
		</form>
	</fieldset>


<?php

$firstname = $_POST[user_firstname];
$lastname = $_POST[user_lastname];
$email= $_POST[user_email];


$cookie_name = "user";
$cookie_value = $firstname;
$cookie_time = time() + (86400 * 30);

setcookie($cookie_name, $cookie_value, $cookie_time, "/");

if (!isset($_COOKIE[$cookie_name])) {
	echo "Hello and welcome ". $cookie_value . ", nice to meet you!";

}else {
	echo "Welcome back, ". $cookie_value;
}

?>
</body>
</html>

