<?php
	$mail = $_POST['username'];
	$pwd = $_POST['password'];
	
	$conn = new mysqli('localhost', 'root', '', 'assignment');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		$stmt = $conn->prepare("SELECT * FROM accounts WHERE mail = ?");
		$stmt->bind_param("s",$mail);
		$stmt->execute();
		$stmt_result = $stmt->get_result();
		if($stmt_result->num_rows > 0){
			$data = $stmt_result->fetch_assoc();
			if($data['pwd'] === $pwd){
				session_start(); 
				$_SESSION["user"] = $mail;
				$cookie_name = "user";
				$cookie_value = $mail;
				setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
				echo '<script>alert("Login Successful");location="home.php";</script>';
				$stmt->close();
				$conn->close();
			}
			else{
				echo '<script>alert("Invalid Credentials");location="Login.php";</script>';
				$stmt->close();
				$conn->close();
			}
		}
		else{
			echo '<script>alert("Invalid Credentials");location="Login.php";</script>';
			$stmt->close();
			$conn->close();
		}
	}	
?>