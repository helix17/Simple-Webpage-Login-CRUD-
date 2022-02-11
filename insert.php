<?php

session_start();
if($_SESSION["user"] == NULL) { 
   header('Location: Login.php'); 
} 
//connection
$conn = new mysqli('localhost', 'root', '', 'assignment');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
$budget =$_REQUEST['budget'];
$mail = $_REQUEST['mail'];
$phone =$_REQUEST['phone'];
$type = $_REQUEST['type'];
$ins_query="insert into build (`budget`,`mail`,`phone`,`type`) values ('$budget','$mail','$phone','$type')";
mysqli_query($conn,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='build.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="style.css" />
<script src="insert.js"></script>
</head>
<body>
	<nav>
		<div class="projName"><a href="home.php">PC Corner</a></div>
		<ul>
			<li><a href="">Account</a>
			<ul class="account">
				<li><a href="build.php">Build</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul></li>
			<li><a href="about.html">About Us</a></li>
		</ul>
	</nav>
	<div class="inpb">
	<form name="form" method="post" action=""> 
	<input type="hidden" name="new" value="1" />
	<p><input type="text" name="mail" onblur="validate('mail', this.value)" placeholder="Enter Email" required /></p>
	<p id="mail"></p>
	<p><input type="text" name="phone" onblur="validate('phone', this.value)" placeholder="Enter Phone Number" required /></p>
	<p id="phone"></p>
	<p><input type="text" name="budget" placeholder="Enter Budget" required /></p>
	<p><input type="text" name="type" placeholder="Enter Request" required /></p>
	<p><input name="submit" type="submit" value="Submit" /></p>
	</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
</body>
</html>
