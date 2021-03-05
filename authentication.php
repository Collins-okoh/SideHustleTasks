<!DOCTYPE html>
<html>
<head>
	<title>Authentication System</title>
</head>
<body>
	<fieldset>
		<legend><h1>User Details</h1></legend>
		<form method="post" action="authentication.php">
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


echo "<br><br> Hello and welcome, here are the details you submitted: <br><br>";

echo "<b>Firstname:</b> ".$firstname. "<br><br> <b>Lastname:</b> " .$lastname. "<br><br> <b>Email ID:</b> " .$email;

?>

</body>
</html>