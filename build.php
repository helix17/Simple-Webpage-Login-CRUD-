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
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>19BCE2278 IWP DA2 HomePage</title>
	<link rel="stylesheet" href="build.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("button").click(function(){
    $("body").css("background-color", "red");
  });
});
</script>
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
	<div class="caption">
		<span class="border"><a href="insert.php" style="text-decoration: none;">NEW REQUEST</a></span>
	</div>
	<div class="caption2">
		<span class="border"><a class="toggle" href="" style="text-decoration: none;"><button>TOGGLE THEME</button></a></button></span>
	</div>
	
	<h2>View Records</h2>
	<table width="100%" border="1" style="border-collapse:collapse;">
	<thead>
	<tr><th><strong>S.No</strong></th><th><strong>Mail</strong></th><th><strong>Budget</strong></th><th><strong>Request</strong></th><th><strong>Edit</strong></th><th><strong>Delete</strong></th></tr>
	</thead>
	<tbody>
	<?php
	$count=1;
	$sel_query="Select * from build ORDER BY id desc;";
	$result = mysqli_query($conn,$sel_query);
	while($row = mysqli_fetch_assoc($result)) { ?>
	<tr><td align="center"><?php echo $count; ?></td><td align="center"><?php echo $row["mail"]; ?></td><td align="center"><?php echo $row["budget"]; ?></td><td align="center"><?php echo $row["type"]; ?></td><td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
	<?php $count++; } ?>
	</tbody>
	</table>
</body>
<html>