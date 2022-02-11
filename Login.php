<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19BCE2278 IWP DA2 Login</title>
	<link rel="stylesheet" href="Login.css">
</head>
<body>
<?php
session_start();
//connection
$conn = new mysqli('localhost', 'root', '', 'assignment');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
	<script src="Login.js"></script>
	<div class="login-box">
		<h1 style="text-align: center;">LOGIN</h1>
		<form name="LoginForm" action="login_post.php" method="POST" onsubmit="return formvalidation()">
			<table>
				<tr>
					<td><p>Username</p></td>
					<td><input type="text" name="username" placeholder="Enter Username"></td>
				</tr>
				<tr>
					<td><p>Password</p></td> 
					<td><input type="password" name="password" placeholder="Enter Password"></td>
				</tr>
			</table>
			<input type="submit" name="login-field submit" value="Submit">
			<a href="register.php">Don't have an account? Register</a>
		</form> 	
	</div>
</body>
<html>