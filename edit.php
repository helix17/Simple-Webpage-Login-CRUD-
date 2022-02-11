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

$id=$_REQUEST['id'];
$query = "SELECT * from build where id='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
$budget =$_REQUEST['budget'];
$mail = $_REQUEST['mail'];
$phone =$_REQUEST['phone'];
$type = $_REQUEST['type'];
$update="update build set budget='".$budget."', mail='".$mail."', phone='".$phone."', type='".$type."' where id='".$id."'";
mysqli_query($conn,$update) or die(mysql_error());
$status = "Record Updated Successfully. </br></br><a href='build.php'>View Updated Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Record</title>
<link rel="stylesheet" href="style.css" />
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
	<h2>Insert New Record</h2>
	<div class="inpb">
	<form name="form" method="post" action=""> 
	<input type="hidden" name="new" value="1" />
	<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
	<p><input type="text" name="mail" placeholder="Enter Email" required value="<?php echo $row['mail'];?>" /></p>
	<p><input type="text" name="phone" placeholder="Enter Phone Number" required value="<?php echo $row['phone'];?>" /></p>
	<p><input type="text" name="budget" placeholder="Enter Budget" required value="<?php echo $row['budget'];?>" /></p>
	<p><input type="text" name="type" placeholder="Enter Request" required value="<?php echo $row['type'];?>" /></p>
	<p><input name="submit" type="submit" value="Update" /></p>
	</form>
	<p style="color:#FF0000;"><?php echo $status; ?></p>
	</div>
</body>
</html>

