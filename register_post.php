<?php
	$firstName = $_POST['FirstName'];
	$lastName = $_POST['LastName'];
	$dob = $_POST['DoB'];
	$gender = $_POST['gender'];
	$state = $_POST['state'];
	$phone = $_POST['phone'];
	$webpg = isset($_POST['webpage']) ? $_POST['webpage'] : "N/A";
	$mail = $_POST['email'];
	$pwd = $_POST['password'];
	$terms = isset($_POST['terms']) ? $_POST['terms'] : "N/A";
	
	$conn = new mysqli('localhost', 'root', '', 'assignment');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	else{
		$SELECT = "SELECT mail FROM accounts WHERE mail = ? limit 1";
		$INSERT = "INSERT INTO accounts(firstName, lastName, dob, gender, state, phone, webpg, mail, pwd, terms) values(?,?,?,?,?,?,?,?,?,?)";
		$stmt = $conn->prepare($SELECT);
		$stmt->bind_param("s",$mail);
		$stmt->execute();
		$stmt->bind_result($mail);
		$stmt->store_result();
		$rnum = $stmt->num_rows;
		
		if($rnum==0){
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt->bind_param("ssssssssss", $firstName, $lastName, $dob, $gender, $state, $phone, $webpg, $mail, $pwd, $terms);
			$stmt->execute();
			$stmt->close();
			$conn->close();
			echo '<script>alert("Registered Successfully");location="Login.php";</script>';
		}
		else{
			echo '<script>alert("Credentials Already in Use");location="register.php";</script>';
			$stmt->close();
			$conn->close();
			
		}
	}	
?>