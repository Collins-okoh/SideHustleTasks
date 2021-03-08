<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body {
			margin: 6% 25%;
			background-image: linear-gradient(to right, pink, yellow);
		}

		section.main {
			background-color: #fff;
			border: 1px solid black;
			border-radius: 15px;
			width: 60%;
			margin-left: auto;
			margin-right: auto;
		}

		form {
			margin-left: 5%;
			padding-top: 5%;
		}

		h1 {
			text-align: center;
			text-transform: small-caps;
			margin-bottom: 5%;
		}

		input {
			padding: 10px 15px;
			border-radius: 15px;
			margin-left: 8%;
			width: 70%;
		}

		input[type=submit] {
			color: #fff;
			background-color: blue;
			width: 40%;
			margin-left: 27%;
			outline: none;
			margin-bottom: 10px;
			/*margin-bottom: 20px;*/
		}

		p {
			text-align: center;
		}
	</style>
	<title>Login</title>
</head>
<body>
	<section class="main">
		<form action="welcome.php" method="post">
 			<h1>Login</h1>
			<input type="email" placeholder="Email Address" name="user_email" required><br><br>
			<input type="password" placeholder="Password"  name="user_password" required><br><br>
			<input type="submit" name="submit" value="Login">	
			<p>Back to <a href="index.php">sign up?</a></p>
		</form>
	</section>

<?php

session_start();
//$firstname = $_POST[user_firstname];
//$lastname = $_POST[user_lastname];
$email = $_POST[user_email];
$password = $_POST[user_password];
$user_name = $_POST[user_email];
$pwd = $_POST[user_password];

$_SESSION['user'] = $email;

if (isset($_SESSION['user'])) {
	echo "<br><br>Welcome back, ".$_SESSION['user'];
	echo "<a href='welcome.php'>Welcome</a>";
}else if ($user_name == $email && $pwd == $password) {
	echo "<br><br>Welcome back, ".$_SESSION['user'];
}else {
	echo "<br><br>Invalid login details";
}
// $cookie_name = "user";
// $cookie_value = $email;
// $cookie_time = time() + (86400 * 30);

// setcookie($cookie_name, $cookie_value, $cookie_time, "/");

// if (isset($_COOKIE[$cookie_name]) ) {
// 	echo "<br><br>Welcome back, ". $cookie_value;
// }else {
// 	echo "<br><br>Hello and welcome, nice to meet you!";
// }

?>
</body>
</html>